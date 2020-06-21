<?php

namespace App\Http\Requests;

use App\Group;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreGroupRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('group_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required'],
            'speciality_id' => [
                'required'],
        ];
    }
}
