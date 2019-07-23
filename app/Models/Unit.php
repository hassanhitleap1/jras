<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = [
        'title', 'sorting', 'course_id', 'created_by'
    ];


    public function course(){
        return $this->hasOne(Courses::class);
    }

    public function created_by(){
        return $this->hasOne(User::class);
    }

}
