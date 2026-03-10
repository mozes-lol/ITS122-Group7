<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Pasig Archery Club</title>
    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
</head>
<body>
    <div class="auth-container">
        <div class="auth-card">
            <h1>🏹 Pasig Archery Club</h1>
            <p>Management System</p>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul style="margin-left: 1rem; margin-bottom: 0;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @yield('content')
        </div>
    </div>
</body>
</html>
