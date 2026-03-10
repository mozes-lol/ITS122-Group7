@extends('layouts.app')

@section('title', 'Training Logs')
@section('page-title', 'Training Logs')

@push('page-styles')
<link rel="stylesheet" href="/css/pages/coach-training-logs.css">
@endpush

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Athletes Training Logs</h2>
            <a href="#" class="btn btn-sm btn-success" style="width: auto;">➕ Create Log</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Athlete</th>
                        <th>Duration</th>
                        <th>Type</th>
                        <th>Accuracy</th>
                        <th>Notes</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>March 10, 2026</td>
                        <td>Juan Santos</td>
                        <td>2 hours</td>
                        <td><span class="badge badge-primary">Group</span></td>
                        <td>75%</td>
                        <td>Good form, improving accuracy</td>
                        <td>
                            <div class="table-actions">
                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>March 10, 2026</td>
                        <td>Maria Cruz</td>
                        <td>1.5 hours</td>
                        <td><span class="badge badge-success">Individual</span></td>
                        <td>88%</td>
                        <td>Advanced shooting techniques</td>
                        <td>
                            <div class="table-actions">
                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>March 9, 2026</td>
                        <td>Carlos Lopez</td>
                        <td>2 hours</td>
                        <td><span class="badge badge-primary">Group</span></td>
                        <td>92%</td>
                        <td>Excellent performance</td>
                        <td>
                            <div class="table-actions">
                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>March 8, 2026</td>
                        <td>Ana Rodriguez</td>
                        <td>1 hour</td>
                        <td><span class="badge badge-success">Individual</span></td>
                        <td>68%</td>
                        <td>Needs to work on consistency</td>
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