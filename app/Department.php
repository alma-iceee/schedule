<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use SoftDeletes;

    public $table = 'departments';

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

    public function specialities()
    {
        return $this->hasMany(Speciality::class, 'speciality_id', 'id');
    }

    public function teachers()
    {
        return $this->hasMany(User::class, 'teacher_id', 'id');
    }
}
