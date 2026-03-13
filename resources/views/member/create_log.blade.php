@extends('layouts.app')

@section('title', 'Create Training Log')
@section('page-title', 'Create Training Log')

@push('page-styles')
<link rel="stylesheet" href="/css/pages/member-history.css">
@endpush

@section('content')
<div class="card">
    <div class="card-header">
        <h2>New Training Log</h2>
    </div>
    <form method="POST" action="{{ route('member.training-logs.store') }}" class="card-body">
        @csrf

        <div class="form-group">
            <label>Coach</label>
            <select name="coach_id" class="form-input" required>
                <option value="">Select coach...</option>
                @foreach ($coaches as $coach)
                    <option value="{{ $coach->coach_id }}">{{ $coach->first_name }} {{ $coach->last_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Date</label>
                <input type="date" name="session_date" class="form-input" required>
            </div>
            <div class="form-group">
                <label>Distance (m)</label>
                <input type="number" name="distance" class="form-input">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Arrow Count</label>
                <input type="number" name="arrow_count" class="form-input">
            </div>
            <div class="form-group">
                <label>Total Score</label>
                <input type="number" name="total_score" class="form-input">
            </div>
        </div>

        <div class="form-group">
            <label>Coach Rating (1-5)</label>
            <input type="number" name="coach_rating" class="form-input" min="1" max="5">
        </div>

        <div class="form-group">
            <label>Technical Notes</label>
            <input type="text" name="technical_notes" class="form-input">
        </div>

        <button type="submit" class="btn btn-primary">Create Log</button>
    </form>
</div>
@endsection
