<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use SoftDeletes;

    public $table = 'groups';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'speciality',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function speciality()
    {
        return $this->belongsTo(Speciality::class);
    }

    public function students()
    {
        return $this->hasMany(User::class, 'student_id', 'id');
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
