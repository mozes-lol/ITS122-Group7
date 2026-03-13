@extends('layouts.app')

@section('title', 'Training History')
@section('page-title', 'Training History')

@push('page-styles')
<link rel="stylesheet" href="/css/pages/member-history.css">
@endpush

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Your Training Logs</h2>
        </div>
        <div class="card-body">
            <table class="table" id="memberLogsTable">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Distance</th>
                        <th>Score</th>
                        <th>Coach</th>
                        <th>Notes</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($logs as $log)
                        <tr data-id="{{ $log->log_id }}">
                            <td>{{ \Carbon\Carbon::parse($log->session_date)->format('F d, Y') }}</td>
                            <td><span class="badge badge-primary">{{ $log->distance }}m</span></td>
                            <td>{{ $log->total_score }}</td>
                            <td>{{ $log->coach_name }}</td>
                            <td>{{ $log->technical_notes }}</td>
                            <td>
                                <div class="table-actions">
                                    <a href="#" class="btn btn-sm btn-primary" onclick="openEditLogModal(this)">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger" onclick="openDeleteLogModal(this)">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div style="margin-top: 2rem;">
        <a href="/member/create-log" class="btn btn-success">➕ Add New Training Log</a>
    </div>

    <!-- Edit Log Modal -->
    <div id="editMemberLogModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Edit Training Log</h2>
                <button class="modal-close" onclick="closeEditLogModal()">×</button>
            </div>
            <form method="POST" action="{{ route('member.training-logs.update', ['id' => '__ID__']) }}" id="editMemberLogForm" data-action="{{ route('member.training-logs.update', ['id' => '__ID__']) }}">
                @csrf
                @method('PATCH')
                <input type="hidden" name="id" id="editMemberLogId">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" id="editMemberDate" name="session_date" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label>Distance (m)</label>
                        <input type="number" id="editMemberDistance" name="distance" class="form-input">
                    </div>
                    <div class="form-group">
                        <label>Total Score</label>
                        <input type="number" id="editMemberScore" name="total_score" class="form-input">
                    </div>
                    <div class="form-group">
                        <label>Coach Rating (1-5)</label>
                        <input type="number" id="editMemberRating" name="coach_rating" min="1" max="5" class="form-input">
                    </div>
                    <div class="form-group">
                        <label>Technical Notes</label>
                        <input type="text" id="editMemberNotes" name="technical_notes" class="form-input">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-btn-cancel" onclick="closeEditLogModal()">Cancel</button>
                    <button type="submit" class="modal-btn-submit">Save Changes</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Delete Log Modal -->
    <div id="deleteMemberLogModal" class="modal">
        <div class="modal-content modal-danger">
            <div class="modal-header">
                <h2>Delete Training Log</h2>
                <button class="modal-close" onclick="closeDeleteLogModal()">×</button>
            </div>
            <form method="POST" action="{{ route('member.training-logs.delete', ['id' => '__ID__']) }}" id="deleteMemberLogForm" data-action="{{ route('member.training-logs.delete', ['id' => '__ID__']) }}">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id" id="deleteMemberLogId">
                <div class="modal-body">
                    <p>Are you sure you want to delete this training log? This action cannot be undone.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-btn-cancel" onclick="closeDeleteLogModal()">Cancel</button>
                    <button type="submit" class="modal-btn-delete">Delete Log</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openEditLogModal(btn) {
            const row = btn.closest('tr');
            const id = row.getAttribute('data-id');
            const date = row.cells[0].textContent.trim();
            const distance = row.cells[1].textContent.replace('m','').trim();
            const score = row.cells[2].textContent.trim();
            const notes = row.cells[4].textContent.trim();

            document.getElementById('editMemberLogId').value = id;
            document.getElementById('editMemberDate').value = new Date(date).toISOString().split('T')[0];
            document.getElementById('editMemberDistance').value = distance;
            document.getElementById('editMemberScore').value = score;
            document.getElementById('editMemberNotes').value = notes;

            const form = document.getElementById('editMemberLogForm');
            form.action = form.dataset.action.replace('__ID__', id);

            document.getElementById('editMemberLogModal').classList.add('active');
        }

        function closeEditLogModal() {
            document.getElementById('editMemberLogModal').classList.remove('active');
        }

        function openDeleteLogModal(btn) {
            const row = btn.closest('tr');
            const id = row.getAttribute('data-id');

            document.getElementById('deleteMemberLogId').value = id;

            const form = document.getElementById('deleteMemberLogForm');
            form.action = form.dataset.action.replace('__ID__', id);

            document.getElementById('deleteMemberLogModal').classList.add('active');
        }

        function closeDeleteLogModal() {
            document.getElementById('deleteMemberLogModal').classList.remove('active');
        }

        window.addEventListener('click', function(e) {
            const editModal = document.getElementById('editMemberLogModal');
            const deleteModal = document.getElementById('deleteMemberLogModal');

            if (e.target == editModal) editModal.classList.remove('active');
            if (e.target == deleteModal) deleteModal.classList.remove('active');
        });
    </script>
@endsection
