<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::orderBy('event_date', 'asc')->get();

        return view('admin.schedules.index', compact('schedules'));
    }

    public function create()
    {
        return view('admin.schedules.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable|max:2000',
            'event_dates' => 'required|array|min:1',
            'event_dates.*' => 'required|date',
        ]);

        foreach ($validated['event_dates'] as $eventDate) {
            Schedule::create([
                'title' => $validated['title'],
                'event_date' => $eventDate,
                'description' => $validated['description'] ?? null,
            ]);
        }

        return redirect()->route('admin.schedules.index');
    }

    public function edit(Schedule $schedule)
    {
        return view('admin.schedules.edit', compact('schedule'));
    }

    public function update(Request $request, Schedule $schedule)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'event_date' => 'required|date',
            'description' => 'nullable|max:2000',
        ]);

        $schedule->update($validated);

        return redirect()->route('admin.schedules.index');
    }

    public function destroy(Schedule $schedule)
    {
        $schedule->delete();

        return redirect()->route('admin.schedules.index');
    }
}
