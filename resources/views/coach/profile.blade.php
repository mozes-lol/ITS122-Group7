@extends('layouts.app')

@section('title', 'Coach Profile')
@section('page-title', 'My Profile')

@push('page-styles')
<link rel="stylesheet" href="/css/pages/coach-profile.css">
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
                    <p style="color: #333; font-weight: 500; margin: 0;">{{ auth()->user()->name }}</p>
                </div>
                <div style="margin-bottom: 1rem;">
                    <p style="color: #999; font-size: 0.8rem; margin: 0;">Email</p>
                    <p style="color: #333; font-weight: 500; margin: 0;">{{ auth()->user()->email }}</p>
                </div>
                <div style="margin-bottom: 1rem;">
                    <p style="color: #999; font-size: 0.8rem; margin: 0;">Position</p>
                    <p style="color: #333; font-weight: 500; margin: 0;">Certified Archery Coach</p>
                </div>
                <div style="margin-bottom: 1rem;">
                    <p style="color: #999; font-size: 0.8rem; margin: 0;">Joined</p>
                    <p style="color: #333; font-weight: 500; margin: 0;">June 10, 2023</p>
                </div>
                <div style="margin-bottom: 1rem;">
                    <p style="color: #999; font-size: 0.8rem; margin: 0;">Specialization</p>
                    <p style="color: #333; font-weight: 500; margin: 0;">Distance Shooting & Accuracy</p>
                </div>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary" style="width: 100%; margin: 0;">✏️ Edit Profile</a>
            </div>
        </div>

        <!-- Coaching Stats -->
        <div class="card">
            <div class="card-header">
                <h2>Coaching Statistics</h2>
            </div>
            <div class="card-body">
                <div style="margin-bottom: 1rem;">
                    <p style="color: #999; font-size: 0.8rem; margin: 0;">Athletes Coached</p>
                    <p style="color: #333; font-weight: 500; margin: 0;">18 athletes</p>
                </div>
                <div style="margin-bottom: 1rem;">
                    <p style="color: #999; font-size: 0.8rem; margin: 0;">Total Sessions Conducted</p>
                    <p style="color: #333; font-weight: 500; margin: 0;">156 sessions</p>
                </div>
                <div style="margin-bottom: 1rem;">
                    <p style="color: #999; font-size: 0.8rem; margin: 0;">Average Athlete Rating</p>
                    <p style="color: #333; font-weight: 500; margin: 0;">4.8/5.0 ⭐</p>
                </div>
                <div style="margin-bottom: 1rem;">
                    <p style="color: #999; font-size: 0.8rem; margin: 0;">Achievements Awarded</p>
                    <p style="color: #333; font-weight: 500; margin: 0;">24 achievements</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Certifications -->
    <div class="card" style="margin-top: 1.5rem;">
        <div class="card-header">
            <h2>Certifications & Qualifications</h2>
        </div>
        <div class="card-body">
            <div style="padding: 1rem 0;">
                <div style="margin-bottom: 1.5rem; padding-bottom: 1rem; border-bottom: 1px solid #e5e7eb;">
                    <h4 style="margin: 0 0 0.25rem;">National Archery Association (NAA) Certified Coach</h4>
                    <p style="margin: 0; font-size: 0.8rem; color: #666;">Valid through June 2026</p>
                </div>
                <div style="margin-bottom: 1.5rem; padding-bottom: 1rem; border-bottom: 1px solid #e5e7eb;">
                    <h4 style="margin: 0 0 0.25rem;">Advanced Sports Psychology Certification</h4>
                    <p style="margin: 0; font-size: 0.8rem; color: #666;">Completed January 2025</p>
                </div>
                <div style="padding-bottom: 1rem;">
                    <h4 style="margin: 0 0 0.25rem;">First Aid & CPR Certification</h4>
                    <p style="margin: 0; font-size: 0.8rem; color: #666;">Valid through December 2026</p>
                </div>
            </div>
        </div>
    </div>
@endsection