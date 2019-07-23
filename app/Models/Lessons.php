<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    protected $fillable = [
        'title', 'content', 'price', 'unit_id', 'created_by'
    ];

}
