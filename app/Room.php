<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use SoftDeletes;

    public $table = 'rooms';

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

    public function lessons()
    {
        return $this->hasMany(Lesson::class, 'lesson_id', 'id');
    }
}
