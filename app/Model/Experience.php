<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    public function tasks(){
       return $this->hasMany(Tasks::class);
    }
}
