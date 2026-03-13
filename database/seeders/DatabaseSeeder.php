<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Create Roles
        DB::table('roles')->insert([
            ['role_name' => 'admin'],
            ['role_name' => 'coach'],
            ['role_name' => 'archer'],
        ]);

        $coachUserId = DB::table('users')->insertGetId([
            'first_name' => 'Maria',
            'last_name' => 'Santos',
            'email' => 'coach@pasig.com',
            'password_hash' => Hash::make('password123'),
            'role_id' => 2,
            'status' => 'active',
        ]);

        $coachId = DB::table('coaches')->insertGetId([
            'user_id' => $coachUserId,
            'certification' => 'Level 2 Instructor',
            'specialization' => 'Recurve',
            'hire_date' => '2025-01-15'
        ]);

        $archerUserId = DB::table('users')->insertGetId([
            'first_name' => 'Juan',
            'last_name' => 'Dela Cruz',
            'email' => 'juan@pasig.com',
            'password_hash' => Hash::make('password123'),
            'role_id' => 3,
            'status' => 'active',
        ]);

        $archerId = DB::table('archers')->insertGetId([
            'user_id' => $archerUserId,
            'experience_level' => 'intermediate',
            'ranking' => 'Gold Archer',
            'join_date' => '2024-01-15'
        ]);
        
        DB::table('training_logs')->insert([
            [
                'archer_id' => $archerId,
                'coach_id' => $coachId,
                'session_date' => '2026-03-10',
                'distance' => 18,
                'arrow_count' => 12,
                'total_score' => 108,
                'coach_rating' => 5,
                'technical_notes' => 'Excellent form and accuracy'
            ],
            [
                'archer_id' => $archerId,
                'coach_id' => $coachId,
                'session_date' => '2026-03-08',
                'distance' => 25,
                'arrow_count' => 12,
                'total_score' => 98,
                'coach_rating' => 4,
                'technical_notes' => 'Steady performance, needs posture work'
            ]
        ]);
    }
}
