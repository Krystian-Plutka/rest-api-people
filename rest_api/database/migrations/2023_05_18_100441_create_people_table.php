<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('lastname');
            $table->string('country');
            $table->string('city');
            $table->string('username');
            $table->dateTime('date');
            $table->double('telephone');
        });

    }

    
    public function down()
    {
        Schema::dropIfExists('people');
    }
};
