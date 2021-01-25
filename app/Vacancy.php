<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $fillable = [
        'heading', 'position', 'salary', 'urgent', 'part_time',
    ];
}
