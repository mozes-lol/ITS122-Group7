@extends('layouts.app')

@section('title', 'User Management')
@section('page-title', 'User Management')

@push('page-styles')
<link rel="stylesheet" href="/css/pages/admin-users.css">
@endpush

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>All Users</h2>
            <a href="#" class="btn btn-sm btn-success" style="width: auto;">➕ Add User</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Joined</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Archer</td>
                        <td>john@example.com</td>
                        <td><span class="badge badge-primary">Member</span></td>
                        <td>Jan 15, 2025</td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td>
                            <div class="table-actions">
                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Maria Coach</td>
                        <td>maria@example.com</td>
                        <td><span class="badge badge-warning">Coach</span></td>
                        <td>Jun 10, 2023</td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td>
                            <div class="table-actions">
                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Pedro Member</td>
                        <td>pedro@example.com</td>
                        <td><span class="badge badge-primary">Member</span></td>
                        <td>Mar 1, 2025</td>
                        <td><span class="badge badge-warning">Inactive</span></td>
                        <td>
                            <div class="table-actions">
                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Admin User</td>
                        <td>admin@example.com</td>
                        <td><span class="badge badge-danger">Admin</span></td>
                        <td>Jan 1, 2020</td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td>
                            <div class="table-actions">
                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Ana Rodriguez</td>
                        <td>ana@example.com</td>
                        <td><span class="badge badge-primary">Member</span></td>
                        <td>Feb 20, 2025</td>
                        <td><span class="badge badge-success">Active</span></td>
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