<?php

namespace App\Services;

use App\Lesson;

class TimetableService
{
    public function generateTimetableData($weekDays)
    {
        $timetableData = [];
        $timeRange = (new TimeService)->generateTimeRange(config('app.timetable.start_time'), config('app.timetable.end_time'));
        $lessons   = Lesson::with('group', 'teacher')
            ->timetableByGroupId()
            ->get();

        foreach ($timeRange as $time)
        {
            $timeText = $time['start'] . ' - ' . $time['end'];
            $timetableData[$timeText] = [];

            foreach ($weekDays as $index => $day)
            {
                $lesson = $lessons->where('weekday', $index)->where('start_time', $time['start'])->first();

                if ($lesson)
                {
                    array_push($timetableData[$timeText], [
                        'group_name'   => $lesson->group->name,
                        'teacher_name' => $lesson->teacher->name,
                        'teacher_surname' => $lesson->teacher->surname,
                        'rowspan'      => $lesson->difference/30 ?? ''
                    ]);
                }
                else if (!$lessons->where('weekday', $index)->where('start_time', '<', $time['start'])->where('end_time', '>=', $time['end'])->count())
                {
                    array_push($timetableData[$timeText], 1);
                }
                else
                {
                    array_push($timetableData[$timeText], 0);
                }
            }
        }

        return $timetableData;
    }
}
