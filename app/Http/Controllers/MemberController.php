<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display member dashboard
     */
    public function dashboard()
    {
        return view('member.dashboard');
    }

    /**
     * Display training history
     */
    public function history()
    {
        return view('member.history');
    }

    /**
     * Display member profile
     */
    public function profile()
    {
        return view('member.profile');
    }

    /**
     * Display member achievements
     */
    public function achievements()
    {
        return view('member.achievements');
    }

    /**
     * Show form to create new training log
     */
    public function createLog()
    {
        return view('member.create_log');
    }

    /**
     * Store new training log
     */
    public function storeLog(Request $request)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'duration' => 'required|numeric|min:0.5',
            'type' => 'required|in:group,individual,practice,competition',
            'instructor' => 'nullable|string',
            'accuracy' => 'nullable|numeric|min:0|max:100',
            'notes' => 'nullable|string|max:500',
        ]);

        // Store training log in database (implementation pending)
        // TrainingLog::create([...]);

        return redirect()->route('member.history')
                       ->with('success', 'Training log created successfully!');
    }

    /**
     * Update member profile
     */
    public function updateProfile(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . auth()->id(),
            'phone' => 'nullable|string',
        ]);

        auth()->user()->update($validated);

        return redirect()->route('member.profile')
                       ->with('success', 'Profile updated successfully!');
    }

    /**
     * Update password
     */
    public function updatePassword(Request $request)
    {
         $validated = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        // Check current password (implementation pending)
        // if (!Hash::check($validated['current_password'], auth()->user()->password)) {
        //     return back()->with('error', 'Current password is incorrect');
        // }

        // Update password (implementation pending)
        // auth()->user()->update(['password' => Hash::make($validated['new_password'])]);

        return redirect()->route('member.profile')
                       ->with('success', 'Password updated successfully!');
    }
}
