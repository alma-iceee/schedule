<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'user_id',
        'name',
        'surname',
        'patronymic',
        'email',
        'password',
        'group_id',
        'speciality_id',
        'department_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function speciality()
    {
        return $this->belongsTo(Speciality::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class, 'lesson_id', 'id');
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class, 'subject_id', 'id');
    }
}
