<?php

namespace App\Http\Request;

use App\Rules\LessonTimeAvailabilityRule;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreLessonRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('lesson_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'weekday'    => [
                'required',
                'integer',
                'min:1',
                'max:7'],
            'start_time' => [
                'required',
                new LessonTimeAvailabilityRule(),
                'date_format:' . config('panel.lesson_time_format')],
            'end_time'   => [
                'required',
                'after:start_time',
                'date_format:' . config('panel.lesson_time_format')],
            'subject_id' => [
                'required',
                'integer'],
            'teacher_id' => [
                'required',
                'integer'],
            'group_id'   => [
                'required',
                'integer'],
            'room_id' => [
                'required',
                'integer'],
        ];
    }
}
