@extends('layouts.app')

@section('title', 'User Management')

@push('page-styles')
<link rel="stylesheet" href="/css/pages/admin-users.css">
@endpush

@section('content')
    <div class="user-management">
        <!-- Header with Create User Button -->
        <div class="management-header">
            <div class="header-text">
                <h1>User Management</h1>
                <p>create, edit, and manage user accounts and roles</p>
            </div>
            <button class="btn-create-user" onclick="openCreateModal()">
                <i class="fas fa-plus"></i>
                Create User
            </button>
        </div>

        <!-- Stats Row -->
        <div class="stats-row">
            <div class="stat-box">
                <div class="stat-number">{{ $stats['total_users'] ?? 0 }}</div>
                <div class="stat-label">Total Users</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">{{ $stats['pending_users'] ?? 0 }}</div>
                <div class="stat-label">Pending Approval</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">{{ $stats['total_archers'] ?? 0 }}</div>
                <div class="stat-label">Total Archers</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">{{ $stats['total_coaches'] ?? 0 }}</div>
                <div class="stat-label">Total Coaches</div>
            </div>
        </div>

        <!-- Search and Filter -->
        <div class="search-filter-section">
            <div class="search-box">
                <input type="text" id="userSearch" class="search-input" placeholder="Search by name or email...">
            </div>
            <select id="roleFilter" class="filter-select">
                <option value="">All Roles</option>
                <option value="archer">Archer</option>
                <option value="coach">Coach</option>
                <option value="admin">Admin</option>
            </select>
            <select id="statusFilter" class="filter-select">
                <option value="">All Status</option>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>

        <!-- Users Table -->
        <div class="table-wrapper">
            <table class="users-table" id="usersTable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="usersTableBody">
                    @foreach ($users as $user)
                        <tr data-role="{{ $user->role_name ?? $user->role_id }}" data-status="{{ $user->status }}">
                            <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td><span class="role-badge {{ $user->role_name ?? '' }}">{{ $user->role_name ?? $user->role_id }}</span></td>
                            <td><span class="status-badge {{ $user->status }}">{{ ucfirst($user->status) }}</span></td>
                            <td>
                                <div class="action-menu">
                                    <button class="btn-action-menu" onclick="toggleActionMenu(this)"><i class="fas fa-ellipsis-v"></i></button>
                                    <div class="action-dropdown">
                                        <button class="action-item" onclick="openEditModal(this)" data-id="{{ $user->user_id }}"><i class="fas fa-edit"></i> Edit</button>
                                        <button class="action-item action-danger" onclick="openDeleteModal(this)" data-id="{{ $user->user_id }}"><i class="fas fa-trash"></i> Delete</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="pagination">
            <button class="pagination-btn" id="prevBtn" onclick="previousPage()">← Previous</button>
            <div class="pagination-numbers" id="paginationNumbers"></div>
            <button class="pagination-btn" id="nextBtn" onclick="nextPage()">Next →</button>
        </div>
    </div>

    <!-- Create User Modal -->
    <div id="createUserModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Create New User</h2>
                <button class="modal-close" onclick="closeCreateModal()">×</button>
            </div>
            <form method="POST" action="{{ route('admin.users.create') }}">
                @csrf
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" placeholder="Enter first name" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="last_name" placeholder="Enter last name" class="form-input" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Enter email address" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter temporary password" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                        <select name="role" class="form-input" required>
                            <option value="">Select role...</option>
                            <option value="archer">Archer</option>
                            <option value="coach">Coach</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-input">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-btn-cancel" onclick="closeCreateModal()">Cancel</button>
                    <button type="submit" class="modal-btn-submit">Create User</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit User Modal -->
    <div id="editUserModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Edit User</h2>
                <button class="modal-close" onclick="closeEditModal()">×</button>
            </div>
            <form method="POST" action="{{ route('admin.users.update', ['id' => '__ID__']) }}" id="editUserForm" data-action="{{ route('admin.users.update', ['id' => '__ID__']) }}">
                @csrf
                @method('PATCH')
                <input type="hidden" name="id" id="editUserId">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" id="editFirstName" name="first_name" placeholder="Enter first name" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" id="editLastName" name="last_name" placeholder="Enter last name" class="form-input" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="editEmail" name="email" placeholder="Enter email address" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                        <select id="editRole" name="role" class="form-input" required>
                            <option value="">Select role...</option>
                            <option value="archer">Archer</option>
                            <option value="coach">Coach</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select id="editStatus" name="status" class="form-input">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-btn-cancel" onclick="closeEditModal()">Cancel</button>
                    <button type="submit" class="modal-btn-submit">Save Changes</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Delete User Modal -->
    <div id="deleteUserModal" class="modal">
        <div class="modal-content modal-danger">
            <div class="modal-header">
                <h2>Delete User</h2>
                <button class="modal-close" onclick="closeDeleteModal()">×</button>
            </div>
            <form method="POST" action="{{ route('admin.users.delete', ['id' => '__ID__']) }}" id="deleteUserForm" data-action="{{ route('admin.users.delete', ['id' => '__ID__']) }}">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id" id="deleteUserId">
                <div class="modal-body">
                    <p>Are you sure you want to delete <strong id="deleteName"></strong>? This action cannot be undone.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-btn-cancel" onclick="closeDeleteModal()">Cancel</button>
                    <button type="submit" class="modal-btn-delete">Delete User</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const itemsPerPage = 5;
        let currentPage = 1;

        const userSearch = document.getElementById('userSearch');
        const roleFilter = document.getElementById('roleFilter');
        const statusFilter = document.getElementById('statusFilter');
        const rows = document.querySelectorAll('#usersTableBody tr');

        function filterTable() {
            const searchTerm = userSearch.value.toLowerCase();
            const selectedRole = roleFilter.value.toLowerCase();
            const selectedStatus = statusFilter.value.toLowerCase();

            rows.forEach(row => {
                const name = row.cells[0].textContent.toLowerCase();
                const email = row.cells[1].textContent.toLowerCase();
                const role = row.getAttribute('data-role').toLowerCase();
                const status = row.getAttribute('data-status').toLowerCase();

                const matchesSearch = name.includes(searchTerm) || email.includes(searchTerm);
                const matchesRole = selectedRole === '' || role.includes(selectedRole);
                const matchesStatus = selectedStatus === '' || status.includes(selectedStatus);

                row.style.display = matchesSearch && matchesRole && matchesStatus ? '' : 'none';
            });

            currentPage = 1;
            updatePagination();
        }

        function updatePagination() {
            const visibleRows = Array.from(document.querySelectorAll('#usersTableBody tr')).filter(row => row.style.display !== 'none');
            const totalPages = Math.ceil(visibleRows.length / itemsPerPage);

            document.getElementById('prevBtn').disabled = currentPage === 1;
            document.getElementById('nextBtn').disabled = currentPage === totalPages || totalPages === 0;

            const paginationNumbers = document.getElementById('paginationNumbers');
            paginationNumbers.innerHTML = '';

            const maxVisible = 5;
            let startPage = Math.max(1, currentPage - Math.floor(maxVisible / 2));
            let endPage = Math.min(totalPages, startPage + maxVisible - 1);

            if (endPage - startPage + 1 < maxVisible) {
                startPage = Math.max(1, endPage - maxVisible + 1);
            }

            if (startPage > 1) {
                const btn = document.createElement('button');
                btn.className = 'pagination-number';
                btn.textContent = '1';
                btn.onclick = () => goToPage(1);
                paginationNumbers.appendChild(btn);

                if (startPage > 2) {
                    const ellipsis = document.createElement('span');
                    ellipsis.className = 'pagination-ellipsis';
                    ellipsis.textContent = '...';
                    paginationNumbers.appendChild(ellipsis);
                }
            }

            for (let i = startPage; i <= endPage; i++) {
                const btn = document.createElement('button');
                btn.className = `pagination-number ${i === currentPage ? 'active' : ''}`;
                btn.textContent = i;
                btn.onclick = () => goToPage(i);
                paginationNumbers.appendChild(btn);
            }

            if (endPage < totalPages) {
                if (endPage < totalPages - 1) {
                    const ellipsis = document.createElement('span');
                    ellipsis.className = 'pagination-ellipsis';
                    ellipsis.textContent = '...';
                    paginationNumbers.appendChild(ellipsis);
                }

                const btn = document.createElement('button');
                btn.className = 'pagination-number';
                btn.textContent = totalPages;
                btn.onclick = () => goToPage(totalPages);
                paginationNumbers.appendChild(btn);
            }

            visibleRows.forEach((row, index) => {
                const pageStart = (currentPage - 1) * itemsPerPage;
                const pageEnd = pageStart + itemsPerPage;
                row.style.display = index >= pageStart && index < pageEnd ? '' : 'none';
            });
        }

        function nextPage() {
            const visibleRows = Array.from(document.querySelectorAll('#usersTableBody tr')).filter(row => row.style.display !== 'none');
            const totalPages = Math.ceil(visibleRows.length / itemsPerPage);
            if (currentPage < totalPages) {
                currentPage++;
                updatePagination();
            }
        }

        function previousPage() {
            if (currentPage > 1) {
                currentPage--;
                updatePagination();
            }
        }

        function goToPage(page) {
            currentPage = page;
            updatePagination();
        }

        userSearch.addEventListener('input', filterTable);
        roleFilter.addEventListener('change', filterTable);
        statusFilter.addEventListener('change', filterTable);

        updatePagination();

        function openCreateModal() {
            document.getElementById('createUserModal').classList.add('active');
        }

        function closeCreateModal() {
            document.getElementById('createUserModal').classList.remove('active');
        }

        function openEditModal(btn) {
            const row = btn.closest('tr');
            const fullName = row.cells[0].textContent;
            const nameParts = fullName.trim().split(' ');
            const firstName = nameParts[0];
            const lastName = nameParts.slice(1).join(' ');
            const email = row.cells[1].textContent;
            const role = row.getAttribute('data-role');
            const status = row.getAttribute('data-status');
            const id = btn.getAttribute('data-id');

            document.getElementById('editFirstName').value = firstName;
            document.getElementById('editLastName').value = lastName;
            document.getElementById('editEmail').value = email;
            document.getElementById('editRole').value = role.toLowerCase();
            document.getElementById('editStatus').value = status.toLowerCase();
            document.getElementById('editUserId').value = id;

            const editForm = document.getElementById('editUserForm');
            editForm.action = editForm.dataset.action.replace('__ID__', id);

            document.getElementById('editUserModal').classList.add('active');
        }

        function closeEditModal() {
            document.getElementById('editUserModal').classList.remove('active');
        }

        function openDeleteModal(btn) {
            const row = btn.closest('tr');
            const name = row.cells[0].textContent;
            const id = btn.getAttribute('data-id');

            document.getElementById('deleteName').textContent = name;
            document.getElementById('deleteUserId').value = id;

            const deleteForm = document.getElementById('deleteUserForm');
            deleteForm.action = deleteForm.dataset.action.replace('__ID__', id);

            document.getElementById('deleteUserModal').classList.add('active');
        }

        function closeDeleteModal() {
            document.getElementById('deleteUserModal').classList.remove('active');
        }

        window.addEventListener('click', function(e) {
            const createModal = document.getElementById('createUserModal');
            const editModal = document.getElementById('editUserModal');
            const deleteModal = document.getElementById('deleteUserModal');

            if (e.target == createModal) createModal.classList.remove('active');
            if (e.target == editModal) editModal.classList.remove('active');
            if (e.target == deleteModal) deleteModal.classList.remove('active');
        });
    </script>
@endsection
