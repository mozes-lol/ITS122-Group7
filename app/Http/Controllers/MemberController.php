<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function dashboard()
    {
        return view('member.dashboard');
    }

    public function history()
    {
        return view('member.history');
    }

    public function createLog()
    {
        return view('member.create_log');
    }

    public function profile()
    {
        return view('member.profile');
    }

    public function achievements()
    {
        return view('member.achievements');
    }
}