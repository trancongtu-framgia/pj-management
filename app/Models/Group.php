<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'id',
        'name',
        'description',
        'group_image',
        'subject_id',
        'teacher_id',
    ];

    public function subjects()
    {
        return $this->belongsTo('App\Models\Subject');
    }
}
