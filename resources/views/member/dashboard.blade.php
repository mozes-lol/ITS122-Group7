@extends('layouts.app')

@section('title', 'Member Dashboard')
@section('page-title', 'My Dashboard')

@push('page-styles')
<link rel="stylesheet" href="/css/pages/member-dashboard.css">
@endpush

@section('content')
    <!-- Stats Grid -->
    <div class="dashboard-grid">
        <div class="stat-card">
            <h3>Total Training Hours</h3>
            <div class="stat-value">45</div>
        </div>
        <div class="stat-card success">
            <h3>Training Sessions</h3>
            <div class="stat-value">22</div>
        </div>
        <div class="stat-card warning">
            <h3>Current Skill Level</h3>
            <div class="stat-value">Intermediate</div>
        </div>
        <div class="stat-card danger">
            <h3>Achievements</h3>
            <div class="stat-value">8</div>
        </div>
    </div>

    <!-- Content Grid -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">
        <!-- Recent Training -->
        <div class="card">
            <div class="card-header">
                <h2>Recent Training</h2>
                <a href="/member/history" class="btn btn-sm btn-primary" style="width: auto;">View All</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Duration</th>
                            <th>Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>March 10, 2026</td>
                            <td>2 hours</td>
                            <td>Accuracy training</td>
                        </tr>
                        <tr>
                            <td>March 8, 2026</td>
                            <td>1.5 hours</td>
                            <td>Distance shooting</td>
                        </tr>
                        <tr>
                            <td>March 5, 2026</td>
                            <td>2 hours</td>
                            <td>Form improvement</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="card">
            <div class="card-header">
                <h2>Quick Actions</h2>
            </div>
            <div class="card-body" style="padding: 1rem 0;">
                <a href="/member/history" class="btn btn-primary" style="margin-bottom: 0.5rem;">📚 Training History</a>
                <a href="/member/profile" class="btn btn-success" style="margin-bottom: 0.5rem;">👤 My Profile</a>
                <a href="/member/achievements" class="btn btn-warning" style="margin-bottom: 0.5rem;">🏆 Achievements</a>
            </div>
        </div>
    </div>
@endsection
