<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display admin dashboard
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    /**
     * Display all users
     */
    public function users()
    {
        return view('admin.users');
    }

    /**
     * Display achievements management
     */
    public function achievements()
    {
        return view('admin.achievements');
    }

    /**
     * Display analytics report
     */
    public function analytics()
    {
        return view('admin.analytics');
    }

    /**
     * Create new user
     */
    public function createUser(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:admin,coach,member',
        ]);

        // Create user (implementation pending)
        // User::create([...]);

        return redirect()->route('admin.users')
                       ->with('success', 'User created successfully!');
    }

    /**
     * Update user
     */
    public function updateUser(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required|in:admin,coach,member',
        ]);

        // Update user (implementation pending)
        // User::find($id)->update([...]);

        return redirect()->route('admin.users')
                       ->with('success', 'User updated successfully!');
    }

    /**
     * Delete user
     */
    public function deleteUser($id)
    {
        // Prevent deleting own account
        if ($id == auth()->id()) {
            return redirect()->route('admin.users')
                           ->with('error', 'Cannot delete your own account!');
        }

        // Delete user (implementation pending)
        // User::find($id)->delete();

        return redirect()->route('admin.users')
                       ->with('success', 'User deleted successfully!');
    }

    /**
     * Create system achievement
     */
    public function createAchievement(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|string',
            'criteria' => 'required|string',
        ]);

        // Create achievement (implementation pending)
        // Achievement::create([...]);

        return redirect()->route('admin.achievements')
                       ->with('success', 'Achievement created successfully!');
    }

    /**
     * Export analytics report
     */
    public function exportAnalytics()
    {
        // Export functionality (implementation pending with CSV or PDF)
        return response()->download('analytics.csv');
    }
}