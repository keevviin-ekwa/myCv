<?php

namespace App;

use App\Model\Atout;
use App\Model\Formation;
use App\Model\Language;
use App\Model\Lien;
use App\Model\Loisir;
use App\Model\Realisation;
use App\Model\Resume;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function cv(){

       return $this->hasOne(User::class);
    }

    public function liens(){
       return $this->hasMany(Lien::class);
    }

    public function languages()
    {
      return  $this->hasMany(Language::class);
    }

    public function loisirs(){
       return $this->hasMany(Loisir::class);

    }

    public function realisations(){
      return  $this->hasMany(Realisation::class);
    }

    public function resume(){
       return $this->hasOne(Resume::class);
    }

    public function atouts(){
       return $this->hasMany(Atout::class);
    }


    public function formations(){
       return $this->hasMany(Formation::class);
    }

}
