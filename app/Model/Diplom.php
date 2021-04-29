<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Diplom extends Model
{
    public function formation(){
         return $this->hasOne(Diplom::class);
    }
}
