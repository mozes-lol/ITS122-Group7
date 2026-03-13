<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'User not found');
        }

        if (!Hash::check($request->password, $user->password_hash)) {
            return back()->with('error', 'Invalid password');
        }

        // store user session
        Session::put('user', $user);

        // redirect based on role
        $role = $user->role->role_name;

        if ($role == 'admin') {
            return redirect('/admin/dashboard');
        }

        if ($role == 'coach') {
            return redirect('/coach/dashboard');
        }

        if ($role == 'member') {
            return redirect('/member/dashboard');
        }

        return redirect('/');
    }

    public function logout()
    {
        Session::forget('user');
        return redirect('/login');
    }
}