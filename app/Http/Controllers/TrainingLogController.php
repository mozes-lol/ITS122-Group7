<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainingLog;
use Illuminate\Support\Facades\Session;

class TrainingLogController extends Controller
{
    public function store(Request $request)
    {
        $user = Session::get('user');

        $log = new TrainingLog();
        $log->archer_id = $user->archer->archer_id;
        $log->coach_id = $request->coach_id;
        $log->session_date = $request->session_date;
        $log->distance = $request->distance;
        $log->arrow_count = $request->arrow_count;
        $log->total_score = $request->total_score;
        $log->coach_rating = $request->coach_rating;
        $log->technical_notes = $request->technical_notes;
        $log->created_at = now();

        $log->save();

        return redirect('/member/history');
    }
}