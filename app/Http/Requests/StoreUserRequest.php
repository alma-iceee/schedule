<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'user_id'  => [
                'required'],
            'surname'  => [
                'required'],
            'name'     => [
                'required'],
            'patronymic' => [
                'required'],
            'email'    => [
                'required',
                'unique:users'],
            'password' => [
                'required'],
            'roles.*'  => [
                'integer'],
            'roles'    => [
                'required',
                'array'],
            'group_id',
            'department_id',
            'speciality_id',
        ];
    }
}
