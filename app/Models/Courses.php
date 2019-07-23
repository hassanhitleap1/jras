<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Courses extends Model
{
    const DefaultDiscount=0;
    const DefaultPrice=0;
    protected $fillable = [
        'title', 'description', 'price', 'discount', 'created_by'
    ];


    public function created_by(){
        return $this->hasOne(User::class);
    }

    public function units(){
        return $this->hasMany(Courses::class);  
    }
}
