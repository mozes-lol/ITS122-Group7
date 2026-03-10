@extends('layouts.app')

@section('title', 'Coach Dashboard')
@section('page-title', 'Coach Dashboard')

@push('page-styles')
<link rel="stylesheet" href="/css/pages/coach-dashboard.css">
@endpush

@section('content')
    <!-- Stats Grid -->
    <div class="dashboard-grid">
        <div class="stat-card">
            <h3>Athletes Coaching</h3>
            <div class="stat-value">18</div>
        </div>
        <div class="stat-card success">
            <h3>Training Sessions (This Month)</h3>
            <div class="stat-value">12</div>
        </div>
        <div class="stat-card warning">
            <h3>One-on-One Sessions</h3>
            <div class="stat-value">8</div>
        </div>
        <div class="stat-card danger">
            <h3>Athletes Achievements</h3>
            <div class="stat-value">24</div>
        </div>
    </div>

    <!-- Content Grid -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">
        <!-- Active Archers -->
        <div class="card">
            <div class="card-header">
                <h2>Your Athletes</h2>
                <a href="/coach/archers" class="btn btn-sm btn-primary" style="width: auto;">View All</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Skill Level</th>
                            <th>Last Training</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Juan Santos</td>
                            <td><span class="badge badge-primary">Beginner</span></td>
                            <td>Today</td>
                        </tr>
                        <tr>
                            <td>Maria Cruz</td>
                            <td><span class="badge badge-success">Intermediate</span></td>
                            <td>Yesterday</td>
                        </tr>
                        <tr>
                            <td>Carlos Lopez</td>
                            <td><span class="badge badge-danger">Advanced</span></td>
                            <td>2 days ago</td>
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
                <a href="/coach/archers" class="btn btn-primary" style="margin-bottom: 0.5rem;">🎯 Manage Athletes</a>
                <a href="/coach/training-logs" class="btn btn-success" style="margin-bottom: 0.5rem;">📝 View Training Logs</a>
                <a href="/coach/profile" class="btn btn-warning" style="margin-bottom: 0.5rem;">👤 My Profile</a>
            </div>
        </div>
    </div>
@endsection