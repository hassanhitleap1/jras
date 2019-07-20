<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    const DefaultDiscount=0;
    protected $fillable = [
        'title', 'description', 'price', 'discount'
    ];
}
