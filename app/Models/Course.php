<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'courseName',
        'startTime',
        'endTime',
        'content',
        'idTeacher'
    ];

    public function users()
    {
        return $this->belongsTo('users');
    }

    public function teachers()
    {
        return $this->belongsTo('teachers');
    }
}
