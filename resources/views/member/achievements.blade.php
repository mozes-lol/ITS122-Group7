@extends('layouts.app')

@section('title', 'Member Achievements')
@section('page-title', 'My Achievements')

@push('page-styles')
<link rel="stylesheet" href="/css/pages/coach-achievements.css">
@endpush

@section('content')
    <div class="achievements-management">
        <!-- Header -->
        <div class="management-header">
            <div class="header-text">
                <h1>My Achievements</h1>
                <p>Track your archer milestones and accomplishments</p>
            </div>
        </div>

        <!-- Achievements Grid -->
        <div class="achievements-grid">
            <!-- Achievement 1 -->
            <div class="achievement-card">
                <div class="achievement-icon">🏆</div>
                <div class="achievement-body">
                    <h3 class="achievement-title">Marksman</h3>
                    <p class="achievement-description">Achieved 90% accuracy</p>
                    <p class="achievement-date">March 5, 2026</p>
                </div>
            </div>

            <!-- Achievement 2 -->
            <div class="achievement-card">
                <div class="achievement-icon">🎯</div>
                <div class="achievement-body">
                    <h3 class="achievement-title">Sharpshooter</h3>
                    <p class="achievement-description">Completed 20 training sessions</p>
                    <p class="achievement-date">February 28, 2026</p>
                </div>
            </div>

            <!-- Achievement 3 -->
            <div class="achievement-card">
                <div class="achievement-icon">⭐</div>
                <div class="achievement-body">
                    <h3 class="achievement-title">Dedicated Archer</h3>
                    <p class="achievement-description">40+ hours of training</p>
                    <p class="achievement-date">February 20, 2026</p>
                </div>
            </div>

            <!-- Achievement 4 -->
            <div class="achievement-card">
                <div class="achievement-icon">🔥</div>
                <div class="achievement-body">
                    <h3 class="achievement-title">On Fire</h3>
                    <p class="achievement-description">5 consecutive perfect sessions</p>
                    <p class="achievement-date">February 10, 2026</p>
                </div>
            </div>

            <!-- Achievement 5 -->
            <div class="achievement-card">
                <div class="achievement-icon">🏅</div>
                <div class="achievement-body">
                    <h3 class="achievement-title">Champion</h3>
                    <p class="achievement-description">First place in monthly tournament</p>
                    <p class="achievement-date">January 15, 2026</p>
                </div>
            </div>

            <!-- Achievement 6 -->
            <div class="achievement-card">
                <div class="achievement-icon">🏅</div>
                <div class="achievement-body">
                    <h3 class="achievement-title">Team Player</h3>
                    <p class="achievement-description">Participated in team events</p>
                    <p class="achievement-date">January 15, 2026</p>
                </div>
            </div>

            <!-- Achievement 7 -->
            <div class="achievement-card">
                <div class="achievement-icon">💎</div>
                <div class="achievement-body">
                    <h3 class="achievement-title">Elite Archer</h3>
                    <p class="achievement-description">Reached advanced skill level</p>
                    <p class="achievement-date">January 5, 2026</p>
                </div>
            </div>

            <!-- Achievement 8 -->
            <div class="achievement-card">
                <div class="achievement-icon">🌟</div>
                <div class="achievement-body">
                    <h3 class="achievement-title">Rising Star</h3>
                    <p class="achievement-description">Monthly most improved archer</p>
                    <p class="achievement-date">December 30, 2025</p>
                </div>
            </div>
        </div>
    </div>
@endsection
