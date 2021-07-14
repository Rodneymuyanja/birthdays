<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Friends extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('friends', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nick-name')->nullable();
            $table->string('birthday')->nullable();
            $table->string('pets')->nullable();
            $table->string('cake')->nullable();
            $table->string('gifts')->nullable();
            $table->string('music')->nullable();
            $table->string('movies')->nullable();
            $table->string('avatar')->nullable();
            $table->string('places')->nullable();
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
        //
        Schema::dropIfExists('friends');
    }
}
