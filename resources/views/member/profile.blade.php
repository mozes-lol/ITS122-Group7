@extends('layouts.app')

@section('title', 'My Profile')
@section('page-title', 'My Profile')

@push('page-styles')
<link rel="stylesheet" href="/css/pages/member-profile.css">
@endpush

@section('content')
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">
        <!-- Profile Info -->
        <div class="card">
            <div class="card-header">
                <h2>Profile Information</h2>
            </div>
            <div class="card-body">
                <div style="margin-bottom: 1rem;">
                    <p style="color: #999; font-size: 0.8rem; margin: 0;">Full Name</p>
                    <p style="color: #333; font-weight: 500; margin: 0;">{{ $user->first_name }} {{ $user->last_name }}</p>
                </div>
                <div style="margin-bottom: 1rem;">
                    <p style="color: #999; font-size: 0.8rem; margin: 0;">Email</p>
                    <p style="color: #333; font-weight: 500; margin: 0;">{{ $user->email }}</p>
                </div>
                <div style="margin-bottom: 1rem;">
                    <p style="color: #999; font-size: 0.8rem; margin: 0;">Member Since</p>
                    <p style="color: #333; font-weight: 500; margin: 0;">{{ $user->registered_at ?? 'N/A' }}</p>
                </div>
                <div style="margin-bottom: 1rem;">
                    <p style="color: #999; font-size: 0.8rem; margin: 0;">Current Skill Level</p>
                    <p style="color: #333; font-weight: 500; margin: 0;">{{ $archer->experience_level ?? 'N/A' }}</p>
                </div>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary" style="width: 100%; margin: 0;" onclick="document.getElementById('editProfileForm').scrollIntoView({behavior:'smooth'}); return false;">✏️ Edit Profile</a>
            </div>
        </div>

        <!-- Training Stats -->
        <div class="card">
            <div class="card-header">
                <h2>Training Statistics</h2>
            </div>
            <div class="card-body">
                <div style="margin-bottom: 1rem;">
                    <p style="color: #999; font-size: 0.8rem; margin: 0;">Experience Level</p>
                    <p style="color: #333; font-weight: 500; margin: 0;">{{ $archer->experience_level ?? 'N/A' }}</p>
                </div>
                <div style="margin-bottom: 1rem;">
                    <p style="color: #999; font-size: 0.8rem; margin: 0;">Ranking</p>
                    <p style="color: #333; font-weight: 500; margin: 0;">{{ $archer->ranking ?? 'N/A' }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Profile -->
    <div class="card" style="margin-top: 1.5rem;">
        <div class="card-header">
            <h2>Edit Profile</h2>
        </div>
        <form method="POST" action="{{ route('member.profile.update') }}" class="card-body" id="editProfileForm">
            @csrf
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" value="{{ $user->first_name }}" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" value="{{ $user->last_name }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}" required>
            </div>
            <div class="form-group">
                <label for="experience_level">Experience Level</label>
                <input type="text" id="experience_level" name="experience_level" value="{{ $archer->experience_level ?? '' }}">
            </div>
            <div class="form-group">
                <label for="ranking">Ranking</label>
                <input type="text" id="ranking" name="ranking" value="{{ $archer->ranking ?? '' }}">
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; margin: 0;">Update Profile</button>
        </form>
    </div>

    <!-- Change Password -->
    <div class="card" style="margin-top: 1.5rem;">
        <div class="card-header">
            <h2>Change Password</h2>
        </div>
        <form method="POST" action="{{ route('member.password.update') }}" class="card-body">
            @csrf
            <div class="form-group">
                <label for="current_password">Current Password</label>
                <input type="password" id="current_password" name="current_password" placeholder="Enter current password" required>
            </div>

            <div class="form-group">
                <label for="new_password">New Password</label>
                <input type="password" id="new_password" name="new_password" placeholder="Enter new password" required>
            </div>

            <div class="form-group">
                <label for="new_password_confirmation">Confirm Password</label>
                <input type="password" id="new_password_confirmation" name="new_password_confirmation" placeholder="Confirm new password" required>
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%; margin: 0;">🔐 Update Password</button>
        </form>
    </div>
@endsection
