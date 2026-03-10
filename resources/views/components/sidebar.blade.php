<!-- SIDEBAR -->
<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <h2>🏹 PAC</h2>
        <button class="sidebar-toggle" onclick="toggleSidebar()" title="Toggle sidebar">
            ☰
        </button>
    </div>

    <nav class="sidebar-menu">
        @php
            $currentSection = request()->segment(1); // Get 'admin', 'coach', or 'member'
        @endphp

        @if($currentSection === 'admin')
            <!-- ADMIN SECTION -->
            <h3>Admin</h3>
            <li><a href="/admin" class="@if(request()->is('admin')) active @endif"><span class="icon">📊</span><span class="label">Dashboard</span></a></li>
            <li><a href="/admin/users" class="@if(request()->is('admin/users')) active @endif"><span class="icon">👥</span><span class="label">User Management</span></a></li>
            <li><a href="/admin/achievements" class="@if(request()->is('admin/achievements')) active @endif"><span class="icon">🏆</span><span class="label">Achievements</span></a></li>
            <li><a href="/admin/analytics" class="@if(request()->is('admin/analytics')) active @endif"><span class="icon">📈</span><span class="label">Analytics Report</span></a></li>

        @elseif($currentSection === 'coach')
            <!-- COACH SECTION -->
            <h3>Coach</h3>
            <li><a href="/coach" class="@if(request()->is('coach')) active @endif"><span class="icon">📊</span><span class="label">Dashboard</span></a></li>
            <li><a href="/coach/archers" class="@if(request()->is('coach/archers')) active @endif"><span class="icon">🎯</span><span class="label">Archers List</span></a></li>
            <li><a href="/coach/training-logs" class="@if(request()->is('coach/training-logs')) active @endif"><span class="icon">📝</span><span class="label">Training Logs</span></a></li>
            <li><a href="/coach/profile" class="@if(request()->is('coach/profile')) active @endif"><span class="icon">👤</span><span class="label">My Profile</span></a></li>
            <li><a href="/coach/achievements" class="@if(request()->is('coach/achievements')) active @endif"><span class="icon">🏆</span><span class="label">My Achievements</span></a></li>

        @else
            <!-- MEMBER SECTION -->
            <h3>Member</h3>
            <li><a href="/member" class="@if(request()->is('member')) active @endif"><span class="icon">📊</span><span class="label">Dashboard</span></a></li>
            <li><a href="/member/history" class="@if(request()->is('member/history')) active @endif"><span class="icon">📚</span><span class="label">Training History</span></a></li>
            <li><a href="/member/profile" class="@if(request()->is('member/profile')) active @endif"><span class="icon">👤</span><span class="label">My Profile</span></a></li>
            <li><a href="/member/achievements" class="@if(request()->is('member/achievements')) active @endif"><span class="icon">🏆</span><span class="label">My Achievements</span></a></li>
        @endif
    </nav>

    <div class="sidebar-logout">
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline" style="color: white; border-color: rgba(255,255,255,0.3); width: 100%;">
                <span class="icon">🚪</span><span class="label">Logout</span>
            </button>
        </form>
    </div>
</aside>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('collapsed');
        localStorage.setItem('sidebarCollapsed', sidebar.classList.contains('collapsed'));
        updateMainContent();
    }

    function updateMainContent() {
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content');
        if (mainContent) {
            if (sidebar.classList.contains('collapsed')) {
                mainContent.classList.add('sidebar-collapsed');
            } else {
                mainContent.classList.remove('sidebar-collapsed');
            }
        }
    }

    window.addEventListener('DOMContentLoaded', function() {
        const sidebar = document.getElementById('sidebar');
        if (localStorage.getItem('sidebarCollapsed') === 'true') {
            sidebar.classList.add('collapsed');
        }
        updateMainContent();
    });
</script>
