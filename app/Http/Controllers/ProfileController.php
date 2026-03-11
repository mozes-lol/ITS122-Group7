<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Session::get('user');

        return view('member.profile', compact('user'));
    }
}