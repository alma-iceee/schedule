<?php

namespace App\Services;
use App\User;
use App\Speciality;
use App\Lesson;

class AutoSchedule
{
    public function getSpeciality()
    {
        $specialities = Speciality::all();
    }
}
