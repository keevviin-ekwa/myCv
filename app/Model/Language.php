<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function users(){
       return $this->belongsToMany(User::class);
    }
}
