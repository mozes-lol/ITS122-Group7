@extends('layouts.app')

@section('title', 'Achievements')
@section('page-title', 'My Achievements')
@push('page-styles')
<link rel="stylesheet" href="/css/pages/member-achievements.css">
@endpush
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Your Achievements</h2>
        </div>
        <div class="card-body">
            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 1.5rem; padding: 1rem 0;">
                <!-- Achievement 1 -->
                <div style="border: 1px solid #e5e7eb; border-radius: 8px; padding: 1.5rem; text-align: center; background: linear-gradient(135deg, #fff5e6 0%, #fff9f0 100%);">
                    <div style="font-size: 2.5rem; margin-bottom: 0.5rem;">🏆</div>
                    <h4 style="margin: 0.5rem 0;">Marksman</h4>
                    <p style="margin: 0; font-size: 0.8rem; color: #666;">Achieved 90% accuracy</p>
                    <p style="margin: 0.5rem 0; font-size: 0.75rem; color: #999;">March 5, 2026</p>
                </div>

                <!-- Achievement 2 -->
                <div style="border: 1px solid #e5e7eb; border-radius: 8px; padding: 1.5rem; text-align: center; background: linear-gradient(135deg, #e6f5ff 0%, #f0f9ff 100%);">
                    <div style="font-size: 2.5rem; margin-bottom: 0.5rem;">🎯</div>
                    <h4 style="margin: 0.5rem 0;">Sharpshooter</h4>
                    <p style="margin: 0; font-size: 0.8rem; color: #666;">Completed 20 training sessions</p>
                    <p style="margin: 0.5rem 0; font-size: 0.75rem; color: #999;">February 28, 2026</p>
                </div>

                <!-- Achievement 3 -->
                <div style="border: 1px solid #e5e7eb; border-radius: 8px; padding: 1.5rem; text-align: center; background: linear-gradient(135deg, #e6ffe6 0%, #f0fff0 100%);">
                    <div style="font-size: 2.5rem; margin-bottom: 0.5rem;">⭐</div>
                    <h4 style="margin: 0.5rem 0;">Dedicated Archer</h4>
                    <p style="margin: 0; font-size: 0.8rem; color: #666;">40+ hours of training</p>
                    <p style="margin: 0.5rem 0; font-size: 0.75rem; color: #999;">February 20, 2026</p>
                </div>

                <!-- Achievement 4 -->
                <div style="border: 1px solid #e5e7eb; border-radius: 8px; padding: 1.5rem; text-align: center; background: linear-gradient(135deg, #ffe6e6 0%, #fff0f0 100%);">
                    <div style="font-size: 2.5rem; margin-bottom: 0.5rem;">🔥</div>
                    <h4 style="margin: 0.5rem 0;">On Fire</h4>
                    <p style="margin: 0; font-size: 0.8rem; color: #666;">5 consecutive perfect sessions</p>
                    <p style="margin: 0.5rem 0; font-size: 0.75rem; color: #999;">February 10, 2026</p>
                </div>

                <!-- Achievement 5 -->
                <div style="border: 1px solid #e5e7eb; border-radius: 8px; padding: 1.5rem; text-align: center; background: linear-gradient(135deg, #f5e6ff 0%, #f9f0ff 100%);">
                    <div style="font-size: 2.5rem; margin-bottom: 0.5rem;">🎖️</div>
                    <h4 style="margin: 0.5rem 0;">Champion</h4>
                    <p style="margin: 0; font-size: 0.8rem; color: #666;">First place in monthly tournament</p>
                    <p style="margin: 0.5rem 0; font-size: 0.75rem; color: #999;">January 30, 2026</p>
                </div>

                <!-- Achievement 6 -->
                <div style="border: 1px solid #e5e7eb; border-radius: 8px; padding: 1.5rem; text-align: center; background: linear-gradient(135deg, #e6f5f5 0%, #f0faf9 100%);">
                    <div style="font-size: 2.5rem; margin-bottom: 0.5rem;">🏅</div>
                    <h4 style="margin: 0.5rem 0;">Team Player</h4>
                    <p style="margin: 0; font-size: 0.8rem; color: #666;">Mentored 3 new members</p>
                    <p style="margin: 0.5rem 0; font-size: 0.75rem; color: #999;">January 15, 2026</p>
                </div>

                <!-- Achievement 7 -->
                <div style="border: 1px solid #e5e7eb; border-radius: 8px; padding: 1.5rem; text-align: center; background: linear-gradient(135deg, #f5e6f5 0%, #f9f0f9 100%);">
                    <div style="font-size: 2.5rem; margin-bottom: 0.5rem;">💎</div>
                    <h4 style="margin: 0.5rem 0;">Elite Archer</h4>
                    <p style="margin: 0; font-size: 0.8rem; color: #666;">Reached advanced skill level</p>
                    <p style="margin: 0.5rem 0; font-size: 0.75rem; color: #999;">January 5, 2026</p>
                </div>

                <!-- Achievement 8 -->
                <div style="border: 1px solid #e5e7eb; border-radius: 8px; padding: 1.5rem; text-align: center; background: linear-gradient(135deg, #e6e6ff 0%, #f0f0ff 100%);">
                    <div style="font-size: 2.5rem; margin-bottom: 0.5rem;">🌟</div>
                    <h4 style="margin: 0.5rem 0;">Rising Star</h4>
                    <p style="margin: 0; font-size: 0.8rem; color: #666;">Monthly most improved archer</p>
                    <p style="margin: 0.5rem 0; font-size: 0.75rem; color: #999;">December 30, 2025</p>
                </div>
            </div>
        </div>
    </div>
@endsection