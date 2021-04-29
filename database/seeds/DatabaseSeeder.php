<?php

use App\Model\cv;
use App\Model\Diplom;
use App\Model\Experience;
use App\Model\Formation;
use App\Model\Lien;
use App\Model\Reference;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Diplom::class,10)->create();
        factory(Experience::class,20)->create()->each(function ($experience){
            return $experience->tasks()->save(factory(\App\Model\Tasks::class)->make());
        });
        factory(Formation::class,10)->create();
        factory(Reference::class,10)->create();
        factory(User::class,15)->create()->each(function ($user){
            return $user->liens()->save(factory(Lien::class)->make());
        });
        factory(cv::class,15)->create();
        User::all()->each(function ($user){
            return $user->resume()->save(factory(\App\Model\Resume::class)->make());
        });

        User::all()->each(function ($user){
            return $user->loisirs()->save(factory(\App\Model\Loisir::class)->make());
        });
        User::all()->each(function ($user){
            return $user->languages()->save(factory(\App\Model\Language::class)->make());
        });
        User::all()->each(function ($user){
            return $user->realisations()->save(factory(\App\Model\Realisation::class)->make());
        });
    }
}
