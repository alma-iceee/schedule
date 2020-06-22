<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Lesson;
use App\Services\TimetableService;

class TimetableController extends Controller
{
    public function index(TimetableService $calendarService)
    {
        $weekDays     = Lesson::WEEK_DAYS;
        $timetableData = $calendarService->generateTimetableData($weekDays);

        return view('admin.timetable', compact('weekDays', 'timetableData'));
    }
}
