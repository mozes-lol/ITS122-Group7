@extends('layouts.app')

@section('title', 'Archers List')
@section('page-title', 'Your Archers')
@push('page-styles')
<link rel="stylesheet" href="/css/pages/coach-archers.css">
@endpush
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Your Athletes</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Skill Level</th>
                        <th>Training Hours</th>
                        <th>Last Training</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Juan Santos</td>
                        <td><span class="badge badge-primary">Beginner</span></td>
                        <td>12 hours</td>
                        <td>Today</td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td>
                            <div class="table-actions">
                                <a href="#" class="btn btn-sm btn-primary">View</a>
                                <a href="#" class="btn btn-sm btn-warning">Edit</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Maria Cruz</td>
                        <td><span class="badge badge-success">Intermediate</span></td>
                        <td>35 hours</td>
                        <td>Yesterday</td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td>
                            <div class="table-actions">
                                <a href="#" class="btn btn-sm btn-primary">View</a>
                                <a href="#" class="btn btn-sm btn-warning">Edit</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Carlos Lopez</td>
                        <td><span class="badge badge-danger">Advanced</span></td>
                        <td>65 hours</td>
                        <td>2 days ago</td>
                        <td><span class="badge badge-warning">Inactive</span></td>
                        <td>
                            <div class="table-actions">
                                <a href="#" class="btn btn-sm btn-primary">View</a>
                                <a href="#" class="btn btn-sm btn-warning">Edit</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Ana Rodriguez</td>
                        <td><span class="badge badge-primary">Beginner</span></td>
                        <td>8 hours</td>
                        <td>March 8, 2026</td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td>
                            <div class="table-actions">
                                <a href="#" class="btn btn-sm btn-primary">View</a>
                                <a href="#" class="btn btn-sm btn-warning">Edit</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Pedro Reyes</td>
                        <td><span class="badge badge-success">Intermediate</span></td>
                        <td>28 hours</td>
                        <td>March 9, 2026</td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td>
                            <div class="table-actions">
                                <a href="#" class="btn btn-sm btn-primary">View</a>
                                <a href="#" class="btn btn-sm btn-warning">Edit</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection