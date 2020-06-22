<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'title'                    => 'Title',
            'title_helper'             => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'title'                    => 'Title',
            'title_helper'             => '',
            'permissions'              => 'Permissions',
            'permissions_helper'       => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
        ],
    ],
    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'user_id'                  => 'User ID',
            'user_id_helper'           => '',
            'name'                     => 'Name',
            'name_helper'              => '',
            'surname'                  => 'Surname',
            'surname_helper'           => '',
            'patronymic'               => 'Patronymic',
            'patronymic_helper'        => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
        ],
    ],
    'lesson'         => [
        'title'          => 'Lessons',
        'title_singular' => 'Lesson',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'subject'           => 'Subject',
            'subject_helper'    => '',
            'teacher'           => 'Teacher',
            'teacher_helper'    => '',
            'group'             => 'Group',
            'group_helper'      => '',
            'room'              => 'Room',
            'room_helper'       => '',
            'weekday'           => 'Weekday',
            'weekday_helper'    => '',
            'start_time'        => 'Start Time',
            'start_time_helper' => '',
            'end_time'          => 'End Time',
            'end_time_helper'   => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'group'    => [
        'title'          => 'Groups',
        'title_singular' => 'Group',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'speciality'        => 'Speciality',
            'speciality_helper' => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'speciality'    => [
        'title'          => 'Specialities',
        'title_singular' => 'Speciality',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
];
