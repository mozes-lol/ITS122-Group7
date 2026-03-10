@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <form method="POST" action="/login" class="authentication-form">
        @csrf

        <div class="form-group">
            <label for="email">Email Address</label>
            <input 
                type="email" 
                id="email" 
                name="email" 
                value="{{ old('email') }}"
                placeholder="Enter your email" 
                required
            >
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input 
                type="password" 
                id="password" 
                name="password" 
                placeholder="Enter your password" 
                required
            >
        </div>

        <button type="submit" class="btn btn-primary">🔓 Login</button>

        <div class="form-link">
            Don't have an account? <a href="/register">Create one here</a>
        </div>
    </form>
@endsection
