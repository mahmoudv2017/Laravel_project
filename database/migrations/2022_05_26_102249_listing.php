<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings' , function(Blueprint $table){
            $table->id();
            $table->string('JobTitle');
            $table->string('location');
            $table->string('email');
            $table->string('company');
            $table->longText('desc');
            $table->string('car');
            $table->string('phone');
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
        Schema::dropIfExists('listings');
    }
};