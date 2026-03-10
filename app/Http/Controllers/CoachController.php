<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoachController extends Controller
{
    /**
     * Display coach dashboard
     */
    public function dashboard()
    {
        return view('coach.dashboard');
    }

    /**
     * Display assigned archers/athletes
     */
    public function archers()
    {
        return view('coach.archers');
    }

    /**
     * Display training logs
     */
    public function trainingLogs()
    {
        return view('coach.training-logs');
    }

    /**
     * Display coach profile
     */
    public function profile()
    {
        return view('coach.profile');
    }

    /**
     * Display coach achievements
     */
    public function achievements()
    {
        return view('coach.achievements');
    }

    /**
     * Update coach profile
     */
    public function updateProfile(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . auth()->id(),
            'phone' => 'nullable|string',
            'specialization' => 'nullable|string|max:255',
        ]);

        auth()->user()->update($validated);

        return redirect()->route('coach.profile')
                       ->with('success', 'Profile updated successfully!');
    }

    /**
     * Create training log for athlete
     */
    public function createTrainingLog(Request $request)
    {
        $validated = $request->validate([
            'athlete_id' => 'required|exists:users,id',
            'date' => 'required|date',
            'duration' => 'required|numeric|min:0.5',
            'type' => 'required|in:group,individual,practice,competition',
            'accuracy' => 'nullable|numeric|min:0|max:100',
            'notes' => 'nullable|string|max:500',
        ]);

        // Create training log (implementation pending)
        // TrainingLog::create([...])

        return redirect()->route('coach.training-logs')
                       ->with('success', 'Training log created successfully!');
    }

    /**
     * Award achievement to athlete
     */
    public function awardAchievement(Request $request)
    {
        $validated = $request->validate([
            'athlete_id' => 'required|exists:users,id',
            'achievement_id' => 'required|exists:achievements,id',
        ]);

        // Award achievement (implementation pending)
        // UserAchievement::create([...]);

        return response()->json(['message' => 'Achievement awarded successfully!']);
    }
}