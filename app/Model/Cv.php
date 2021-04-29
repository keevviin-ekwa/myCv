<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class cv extends Model
{
    public function user()
    {
       return $this->belongsTo(User::class);
    }

    public function reference(){
       return $this->hasMany(Reference::class);
    }
}
