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

    // カレンダー表示ページ
    public function calendar()
    {
        return view('schedules.calendar');
    }

    // FullCalendar データAPI
    public function events()
    {
        $events = Schedule::where('event_date', '>=', now())
                          ->orderBy('event_date', 'asc')
                          ->get()
                          ->map(function ($schedule) {
                              return [
                                  'id'    => $schedule->id,
                                  'title' => $schedule->title,
                                  'start' => $schedule->event_date,
                              ];
                          });

        return response()->json($events);
    }

    public function create()
    {
        return view('schedules.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'event_date' => 'required|date',
            'description' => 'nullable',
        ]);

        Schedule::create([
            'title' => $request->title,
            'event_date' => $request->event_date,
            'description' => $request->description,
        ]);

        return redirect()->route('schedules.index');
    }

}