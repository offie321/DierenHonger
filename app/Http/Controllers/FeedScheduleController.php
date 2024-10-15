<?php

namespace App\Http\Controllers;

use App\Models\FeedSchedule;
use Illuminate\Http\Request;

class FeedScheduleController extends Controller
{
    public function index()
    {
        $schedules = FeedSchedule::all();
        return view('feed_schedule.index', compact('schedules'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'feeding_time' => 'required|date_format:H:i',
        ]);

        FeedSchedule::create([
            'feeding_time' => $request->feeding_time,
        ]);

        return redirect()->back()->with('success', 'Feeding time added!');
    }

    public function destroy(FeedSchedule $feedSchedule)
    {
        $feedSchedule->delete();
        return redirect()->back()->with('success', 'Feeding time deleted!');
    }
}