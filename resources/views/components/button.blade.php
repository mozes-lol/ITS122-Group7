@props([
    'color' => 'primary',
    'type' => 'button',
    'size' => 'md',
    'disabled' => false,
    'href' => null,
])

@php
    $baseClasses = 'btn btn-' . $color;
    $sizeClasses = match($size) {
        'sm' => 'btn-sm',
        'lg' => 'btn-lg',
        default => '',
    };
    $classes = trim($baseClasses . ' ' . $sizeClasses);
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button 
        type="{{ $type }}" 
        @disabled($disabled)
        {{ $attributes->merge(['class' => $classes]) }}
    >
        {{ $slot }}
    </button>
@endif

<style>
    /* Button Base Styles */
    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        padding: 0.75rem 1.5rem;
        border-radius: 6px;
        border: none;
        font-weight: 500;
        cursor: pointer;
        text-decoration: none;
        transition: all 0.2s ease;
        font-size: 1rem;
    }

    .btn:hover:not(:disabled) {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .btn:active:not(:disabled) {
        transform: translateY(0);
    }

    .btn:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }

    /* Color Variants */
    .btn-primary {
        background-color: #3b82f6;
        color: white;
    }

    .btn-primary:hover:not(:disabled) {
        background-color: #2563eb;
    }

    .btn-success {
        background-color: #10b981;
        color: white;
    }

    .btn-success:hover:not(:disabled) {
        background-color: #059669;
    }

    .btn-warning {
        background-color: #f59e0b;
        color: white;
    }

    .btn-warning:hover:not(:disabled) {
        background-color: #d97706;
    }

    .btn-danger {
        background-color: #ef4444;
        color: white;
    }

    .btn-danger:hover:not(:disabled) {
        background-color: #dc2626;
    }

    .btn-secondary {
        background-color: #6b7280;
        color: white;
    }

    .btn-secondary:hover:not(:disabled) {
        background-color: #4b5563;
    }

    .btn-outline {
        background-color: transparent;
        color: #3b82f6;
        border: 2px solid #3b82f6;
    }

    .btn-outline:hover:not(:disabled) {
        background-color: #3b82f6;
        color: white;
    }

    /* Size Variants */
    .btn-sm {
        padding: 0.5rem 1rem;
        font-size: 0.875rem;
    }

    .btn-lg {
        padding: 1rem 2rem;
        font-size: 1.125rem;
    }
</style>
