<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'startTime',
        'endTime'
    ];

    public function teachers()
    {
        return $this->hasOne('teachers');
    }
}
