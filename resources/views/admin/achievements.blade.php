@extends('layouts.app')

@section('title', 'Achievements Management')
@section('page-title', 'Achievements Management')

@push('page-styles')
<link rel="stylesheet" href="/css/pages/admin-achievements.css">
@endpush

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>System Achievements</h2>
            <a href="#" class="btn btn-sm btn-success" style="width: auto;">➕ Add Achievement</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Icon</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Total Awarded</th>
                        <th>Created Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>🏆</td>
                        <td>Marksman</td>
                        <td>Achieved 90% accuracy</td>
                        <td><span class="badge badge-success">12 awarded</span></td>
                        <td>Jan 10, 2025</td>
                        <td>
                            <div class="table-actions">
                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>🎯</td>
                        <td>Sharpshooter</td>
                        <td>Completed 20 training sessions</td>
                        <td><span class="badge badge-success">18 awarded</span></td>
                        <td>Jan 5, 2025</td>
                        <td>
                            <div class="table-actions">
                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>⭐</td>
                        <td>Dedicated Archer</td>
                        <td>40+ hours of training</td>
                        <td><span class="badge badge-success">8 awarded</span></td>
                        <td>Dec 20, 2024</td>
                        <td>
                            <div class="table-actions">
                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>🔥</td>
                        <td>On Fire</td>
                        <td>5 consecutive perfect sessions</td>
                        <td><span class="badge badge-danger">3 awarded</span></td>
                        <td>Nov 28, 2024</td>
                        <td>
                            <div class="table-actions">
                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>🏅</td>
                        <td>Team Player</td>
                        <td>Mentored 3 new members</td>
                        <td><span class="badge badge-success">6 awarded</span></td>
                        <td>Oct 15, 2024</td>
                        <td>
                            <div class="table-actions">
                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection