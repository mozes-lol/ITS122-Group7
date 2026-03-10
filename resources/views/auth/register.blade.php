@extends('layouts.auth')

@section('title', 'Register')

@section('content')
    <form method="POST" action="/register" class="authentication-form">
        @csrf

        <div class="form-group">
            <label for="name">Full Name</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                value="{{ old('name') }}"
                placeholder="Enter your full name" 
                required
            >
        </div>

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
                placeholder="Enter a strong password" 
                required
            >
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input 
                type="password" 
                id="password_confirmation" 
                name="password_confirmation" 
                placeholder="Confirm your password" 
                required
            >
        </div>

        <div class="form-group">
            <label for="role">Register as</label>
            <select id="role" name="role" required>
                <option value="">-- Select your role --</option>
                <option value="member">🎯 Archer/Member</option>
                <option value="coach">🏹 Coach</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">✅ Register</button>

        <div class="form-link">
            Already have an account? <a href="/login">Login here</a>
        </div>
    </form>
@endsection
