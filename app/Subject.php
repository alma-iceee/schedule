<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use SoftDeletes;

    public $table = 'subjects';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function teachers()
    {
        return $this->hasMany(User::class, 'teacher_id', 'id');
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class, 'lesson_id', 'id');
    }

    public function groups()
    {
        return $this->hasMany(Group::class, 'group_id', 'id');
    }
}
