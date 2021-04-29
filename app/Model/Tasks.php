<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    public function experience(){
       return  $this->belongsTo(Experience::class);
    }
}
