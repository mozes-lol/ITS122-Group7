@extends('layouts.app')

@section('title', 'Analytics Report')
@section('page-title', 'Analytics Report')

@push('page-styles')
<link rel="stylesheet" href="/css/pages/admin-analytics.css">
@endpush

@section('content')
    <!-- Summary Stats -->
    <div class="dashboard-grid">
        <div class="stat-card">
            <h3>Total Members</h3>
            <div class="stat-value">245</div>
        </div>
        <div class="stat-card success">
            <h3>Total Training Hours</h3>
            <div class="stat-value">1,245</div>
        </div>
        <div class="stat-card warning">
            <h3>Active Sessions (This Month)</h3>
            <div class="stat-value">156</div>
        </div>
        <div class="stat-card danger">
            <h3>Avg. Skill Level</h3>
            <div class="stat-value">Intermediate</div>
        </div>
    </div>

    <!-- Reports Grid -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 1.5rem;">
        <!-- Role Distribution -->
        <div class="card">
            <div class="card-header">
                <h2>User Distribution by Role</h2>
            </div>
            <div class="card-body">
                <div style="padding: 1rem 0;">
                    <div style="margin-bottom: 1.5rem;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                            <span>Members</span>
                            <strong>210 (86%)</strong>
                        </div>
                        <div style="height: 20px; background: #f0f0f0; border-radius: 10px; overflow: hidden;">
                            <div style="height: 100%; width: 86%; background: #10b981;"></div>
                        </div>
                    </div>
                    <div style="margin-bottom: 1.5rem;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                            <span>Coaches</span>
                            <strong>12 (5%)</strong>
                        </div>
                        <div style="height: 20px; background: #f0f0f0; border-radius: 10px; overflow: hidden;">
                            <div style="height: 100%; width: 5%; background: #f59e0b;"></div>
                        </div>
                    </div>
                    <div>
                        <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                            <span>Admins</span>
                            <strong>2 (1%)</strong>
                        </div>
                        <div style="height: 20px; background: #f0f0f0; border-radius: 10px; overflow: hidden;">
                            <div style="height: 100%; width: 1%; background: #ef4444;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Training Activity -->
        <div class="card">
            <div class="card-header">
                <h2>Training Activity (Last 7 Days)</h2>
            </div>
            <div class="card-body">
                <div style="height: 150px; display: flex; align-items: flex-end; gap: 0.5rem; padding: 1rem 0;">
                    <div style="flex: 1; background: #667eea; height: 60%; display: flex; align-items: flex-end; justify-content: center; border-radius: 4px; color: white; font-size: 0.75rem;">22</div>
                    <div style="flex: 1; background: #764ba2; height: 75%; display: flex; align-items: flex-end; justify-content: center; border-radius: 4px; color: white; font-size: 0.75rem;">28</div>
                    <div style="flex: 1; background: #667eea; height: 45%; display: flex; align-items: flex-end; justify-content: center; border-radius: 4px; color: white; font-size: 0.75rem;">17</div>
                    <div style="flex: 1; background: #764ba2; height: 90%; display: flex; align-items: flex-end; justify-content: center; border-radius: 4px; color: white; font-size: 0.75rem;">34</div>
                    <div style="flex: 1; background: #667eea; height: 55%; display: flex; align-items: flex-end; justify-content: center; border-radius: 4px; color: white; font-size: 0.75rem;">21</div>
                    <div style="flex: 1; background: #764ba2; height: 80%; display: flex; align-items: flex-end; justify-content: center; border-radius: 4px; color: white; font-size: 0.75rem;">30</div>
                    <div style="flex: 1; background: #667eea; height: 70%; display: flex; align-items: flex-end; justify-content: center; border-radius: 4px; color: white; font-size: 0.75rem;">26</div>
                </div>
                <div style="display: flex; justify-content: space-around; font-size: 0.8rem; color: #666; margin-top: 1rem;">
                    <span>Mon</span>
                    <span>Tue</span>
                    <span>Wed</span>
                    <span>Thu</span>
                    <span>Fri</span>
                    <span>Sat</span>
                    <span>Sun</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Detailed Reports -->
    <div class="card" style="margin-top: 1.5rem;">
        <div class="card-header">
            <h2>Top 10 Most Active Members</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Name</th>
                        <th>Training Hours</th>
                        <th>Sessions</th>
                        <th>Avg. Accuracy</th>
                        <th>Skill Level</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Carlos Lopez</td>
                        <td>65 hours</td>
                        <td>32</td>
                        <td>89%</td>
                        <td><span class="badge badge-danger">Advanced</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Maria Cruz</td>
                        <td>52 hours</td>
                        <td>28</td>
                        <td>85%</td>
                        <td><span class="badge badge-success">Intermediate</span></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Juan Santos</td>
                        <td>45 hours</td>
                        <td>22</td>
                        <td>78%</td>
                        <td><span class="badge badge-primary">Beginner</span></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Ana Rodriguez</td>
                        <td>38 hours</td>
                        <td>20</td>
                        <td>76%</td>
                        <td><span class="badge badge-primary">Beginner</span></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Pedro Reyes</td>
                        <td>32 hours</td>
                        <td>18</td>
                        <td>72%</td>
                        <td><span class="badge badge-success">Intermediate</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection