<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{

    use HasFactory;
    //tell laravel im not using the timestamp
    public $timestamps = false;

    //inner join :
    public function comments()
    {
        return $this->hasMany(comment::class);
    }
}
