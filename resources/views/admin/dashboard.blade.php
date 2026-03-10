@extends('layouts.app')

@section('title', 'Admin Dashboard')
@section('page-title', 'Admin Dashboard')

@push('page-styles')
<link rel="stylesheet" href="/css/pages/admin-dashboard.css">
@endpush

@section('content')
    <!-- Stats Grid -->
    <div class="dashboard-grid">
        <div class="stat-card">
            <h3>Total Members</h3>
            <div class="stat-value">245</div>
        </div>
        <div class="stat-card success">
            <h3>Active Coaches</h3>
            <div class="stat-value">12</div>
        </div>
        <div class="stat-card warning">
            <h3>Pending Applications</h3>
            <div class="stat-value">8</div>
        </div>
        <div class="stat-card danger">
            <h3>Training Events This Month</h3>
            <div class="stat-value">15</div>
        </div>
    </div>

    <!-- Content Grid -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">
        <!-- Recent Users Card -->
        <div class="card">
            <div class="card-header">
                <h2>Recent Members</h2>
                <a href="/admin/users" class="btn btn-sm btn-primary" style="width: auto;">View All</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Archer</td>
                            <td>Member</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Maria Coach</td>
                            <td>Coach</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Pedro Member</td>
                            <td>Member</td>
                            <td><span class="badge badge-warning">Inactive</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Quick Actions Card -->
        <div class="card">
            <div class="card-header">
                <h2>Quick Actions</h2>
            </div>
            <div class="card-body" style="padding: 1rem 0;">
                <a href="/admin/users" class="btn btn-primary" style="margin-bottom: 0.5rem;">👥 Manage Users</a>
                <a href="/admin/achievements" class="btn btn-success" style="margin-bottom: 0.5rem;">🏆 Manage Achievements</a>
                <a href="/admin/analytics" class="btn btn-warning" style="margin-bottom: 0.5rem;">📈 View Analytics</a>
            </div>
        </div>
    </div>
@endsection