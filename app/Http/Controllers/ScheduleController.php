<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function index()
    {
        // 今日以降の予定を日付順に取得
        $schedules = Schedule::where('event_date', '>=', now())
                        ->orderBy('event_date', 'asc')
                        ->get();
        return view('schedules.index', compact('schedules'));
    }
}