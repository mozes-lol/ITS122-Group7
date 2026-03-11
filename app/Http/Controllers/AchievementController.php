<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

class AchievementController extends Controller
{
    public function index()
    {
        $user = Session::get('user');
        $achievements = $user->archer->achievements;

        return view('member.achievements', compact('achievements'));
    }
}