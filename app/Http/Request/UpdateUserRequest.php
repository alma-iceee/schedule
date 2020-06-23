<?php

namespace App\Http\Request;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateUserRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'user_id'    => [
                'required'],
            'name'       => [
                'required'],
            'surname'    => [
                'required'],
            'patronymic' => [
                'required'],
            'email'      => [
                'required',
                'unique:users,email,' . request()->route('user')->id],
            'roles.*'    => [
                'integer'],
            'roles'      => [
                'required',
                'array'],
            'group_id',
            'department_id',
            'speciality_id',
        ];
    }
}
