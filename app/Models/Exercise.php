<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $fillable = [
        'id',
        'name',
        'description',
        'start_date',
        'end_date',
        'teacher_id',
    ];
}
