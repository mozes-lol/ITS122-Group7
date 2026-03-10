@extends('layouts.app')

@section('title', 'Coach Achievements')
@section('page-title', 'My Achievements')

@push('page-styles')
<link rel="stylesheet" href="/css/pages/coach-achievements.css">
@endpush

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Coaching Achievements</h2>
        </div>
        <div class="card-body">
            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 1.5rem; padding: 1rem 0;">
                <!-- Achievement 1 -->
                <div style="border: 1px solid #e5e7eb; border-radius: 8px; padding: 1.5rem; text-align: center; background: linear-gradient(135deg, #fff5e6 0%, #fff9f0 100%);">
                    <div style="font-size: 2.5rem; margin-bottom: 0.5rem;">🏆</div>
                    <h4 style="margin: 0.5rem 0;">Top Coach</h4>
                    <p style="margin: 0; font-size: 0.8rem; color: #666;">2025 Top Rated Coach</p>
                    <p style="margin: 0.5rem 0; font-size: 0.75rem; color: #999;">December 15, 2025</p>
                </div>

                <!-- Achievement 2 -->
                <div style="border: 1px solid #e5e7eb; border-radius: 8px; padding: 1.5rem; text-align: center; background: linear-gradient(135deg, #e6f5ff 0%, #f0f9ff 100%);">
                    <div style="font-size: 2.5rem; margin-bottom: 0.5rem;">👥</div>
                    <h4 style="margin: 0.5rem 0;">10 Athletes Trained</h4>
                    <p style="margin: 0; font-size: 0.8rem; color: #666;">Coached 10 athletes to achievement</p>
                    <p style="margin: 0.5rem 0; font-size: 0.75rem; color: #999;">November 20, 2025</p>
                </div>

                <!-- Achievement 3 -->
                <div style="border: 1px solid #e5e7eb; border-radius: 8px; padding: 1.5rem; text-align: center; background: linear-gradient(135deg, #e6ffe6 0%, #f0fff0 100%);">
                    <div style="font-size: 2.5rem; margin-bottom: 0.5rem;">⭐</div>
                    <h4 style="margin: 0.5rem 0;">100 Sessions</h4>
                    <p style="margin: 0; font-size: 0.8rem; color: #666;">Completed 100 training sessions</p>
                    <p style="margin: 0.5rem 0; font-size: 0.75rem; color: #999;">October 10, 2025</p>
                </div>

                <!-- Achievement 4 -->
                <div style="border: 1px solid #e5e7eb; border-radius: 8px; padding: 1.5rem; text-align: center; background: linear-gradient(135deg, #ffe6e6 0%, #fff0f0 100%);">
                    <div style="font-size: 2.5rem; margin-bottom: 0.5rem;">🔥</div>
                    <h4 style="margin: 0.5rem 0;">Perfect Scores</h4>
                    <p style="margin: 0; font-size: 0.8rem; color: #666;">5 athletes score perfect in competition</p>
                    <p style="margin: 0.5rem 0; font-size: 0.75rem; color: #999;">September 5, 2025</p>
                </div>

                <!-- Achievement 5 -->
                <div style="border: 1px solid #e5e7eb; border-radius: 8px; padding: 1.5rem; text-align: center; background: linear-gradient(135deg, #f5e6ff 0%, #f9f0ff 100%);">
                    <div style="font-size: 2.5rem; margin-bottom: 0.5rem;">🎖️</div>
                    <h4 style="margin: 0.5rem 0;">Award Winner</h4>
                    <p style="margin: 0; font-size: 0.8rem; color: #666;">Best Coach Award 2025</p>
                    <p style="margin: 0.5rem 0; font-size: 0.75rem; color: #999;">August 30, 2025</p>
                </div>

                <!-- Achievement 6 -->
                <div style="border: 1px solid #e5e7eb; border-radius: 8px; padding: 1.5rem; text-align: center; background: linear-gradient(135deg, #e6f5f5 0%, #f0faf9 100%);">
                    <div style="font-size: 2.5rem; margin-bottom: 0.5rem;">🏅</div>
                    <h4 style="margin: 0.5rem 0;">Mentorship Excellence</h4>
                    <p style="margin: 0; font-size: 0.8rem; color: #666;">Mentored 3 junior coaches</p>
                    <p style="margin: 0.5rem 0; font-size: 0.75rem; color: #999;">July 15, 2025</p>
                </div>

                <!-- Achievement 7 -->
                <div style="border: 1px solid #e5e7eb; border-radius: 8px; padding: 1.5rem; text-align: center; background: linear-gradient(135deg, #f5e6f5 0%, #f9f0f9 100%);">
                    <div style="font-size: 2.5rem; margin-bottom: 0.5rem;">💎</div>
                    <h4 style="margin: 0.5rem 0;">Excellence in Teaching</h4>
                    <p style="margin: 0; font-size: 0.8rem; color: #666;">Avg rating 4.8/5.0 from athletes</p>
                    <p style="margin: 0.5rem 0; font-size: 0.75rem; color: #999;">June 1, 2025</p>
                </div>

                <!-- Achievement 8 -->
                <div style="border: 1px solid #e5e7eb; border-radius: 8px; padding: 1.5rem; text-align: center; background: linear-gradient(135deg, #e6e6ff 0%, #f0f0ff 100%);">
                    <div style="font-size: 2.5rem; margin-bottom: 0.5rem;">🌟</div>
                    <h4 style="margin: 0.5rem 0;">Consistent Excellence</h4>
                    <p style="margin: 0; font-size: 0.8rem; color: #666;">More than 1 year in club</p>
                    <p style="margin: 0.5rem 0; font-size: 0.75rem; color: #999;">May 20, 2025</p>
                </div>
            </div>
        </div>
    </div>
@endsection