<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
 public function diplom(){
     return $this->hasOne(Diplom::class);
 }
}
