<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sports');
            $table->string('name');
            $table->string('address');
            $table->string('phone_no')->unique();
            $table->string('email')->unique();
            $table->string('gender');
            $table->string('blood_group');
            $table->date('date_of_birth');
            $table->integer('age');
            $table->string('physical_problem');
            $table->string('profile');
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
        Schema::dropIfExists('player');
    }
}
