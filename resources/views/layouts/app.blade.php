<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Pasig Archery Club</title>
    <link rel="stylesheet" href="/css/app.css">
    @stack('page-styles')
    <style>
        body {
            background-color: #f9fafb;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <x-sidebar />

        <!-- MAIN CONTENT -->
        <main class="main-content" id="main-content">
            <div class="header">
                <h1>@yield('page-title')</h1>
                <div class="header-right">
                    <div class="user-info">
                        <p>Welcome,</p>
                        <strong>{{ auth()->user()?->name ?? 'Demo User' }}</strong>
                    </div>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <script>
                // Update main-content class when sidebar is toggled
                function updateMainContentClass() {
                    const sidebar = document.getElementById('sidebar');
                    const mainContent = document.getElementById('main-content');
                    if (sidebar && mainContent) {
                        if (sidebar.classList.contains('collapsed')) {
                            mainContent.classList.add('sidebar-collapsed');
                        } else {
                            mainContent.classList.remove('sidebar-collapsed');
                        }
                    }
                }
                
                // Call on page load
                window.addEventListener('DOMContentLoaded', updateMainContentClass);
            </script>
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('build/assets/app.js') }}"></script>
</body>
</html>
