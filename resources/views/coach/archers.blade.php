@extends('layouts.app')

@section('title', 'Archer List')
@section('page-title', 'Archers')

@push('page-styles')
<link rel="stylesheet" href="/css/pages/coach-archers.css">
@endpush

@section('content')
    <div class="archers-management">
        <!-- Header -->
        <div class="management-header">
            <div class="header-text">
                <h1>Archer List</h1>
                <p>Overview of currently active and inactive archers</p>
            </div>
        </div>

        <!-- Archers Grid -->
        <div class="archers-grid">
            @foreach ($archers as $archer)
                <div class="archer-card">
                    <div class="archer-card-header">
                        <div class="archer-avatar">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                <circle cx="12" cy="7" r="4"/>
                            </svg>
                        </div>
                        <button class="archer-menu-btn">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                    </div>
                    <div class="archer-card-body">
                        <h3 class="archer-name">{{ $archer->first_name }} {{ $archer->last_name }}</h3>
                        <p class="archer-rank">{{ $archer->experience_level ?? 'Unspecified' }}</p>
                        <div class="archer-status">
                            <span class="status-indicator active"></span>
                            <span class="status-text">Active</span>
                        </div>
                        <div class="archer-meta">
                            <div class="meta-item">
                                <i class="fas fa-medal"></i>
                                <span>{{ $archer->ranking ?? 'N/A' }}</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-calendar"></i>
                                <span>{{ $archer->join_date ?? 'N/A' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
