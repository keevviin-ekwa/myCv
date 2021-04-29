<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atouts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('user_id')->unsigned();
            $table->integer('cv_id')->unsigned();
            $table->foreign('user_id')->references('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atouts');
    }
}
