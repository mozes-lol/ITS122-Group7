@extends('layouts.app')

@section('title', 'Training History')
@section('page-title', 'Training History')

@push('page-styles')
<link rel="stylesheet" href="/css/pages/member-history.css">
@endpush

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Your Training Logs</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Duration</th>
                        <th>Type</th>
                        <th>Instructor</th>
                        <th>Notes</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>March 10, 2026</td>
                        <td>2 hours</td>
                        <td><span class="badge badge-primary">Group</span></td>
                        <td>Coach Maria</td>
                        <td>Accuracy training - 85% accuracy</td>
                        <td>
                            <div class="table-actions">
                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>March 8, 2026</td>
                        <td>1.5 hours</td>
                        <td><span class="badge badge-success">Individual</span></td>
                        <td>Coach Juan</td>
                        <td>Distance shooting practice</td>
                        <td>
                            <div class="table-actions">
                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>March 5, 2026</td>
                        <td>2 hours</td>
                        <td><span class="badge badge-primary">Group</span></td>
                        <td>Coach Maria</td>
                        <td>Form improvement and technique</td>
                        <td>
                            <div class="table-actions">
                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>March 1, 2026</td>
                        <td>1 hour</td>
                        <td><span class="badge badge-warning">Practice</span></td>
                        <td>Self</td>
                        <td>Free practice session</td>
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

    <div style="margin-top: 2rem;">
        <a href="/member/create-log" class="btn btn-success">➕ Add New Training Log</a>
    </div>
@endsection