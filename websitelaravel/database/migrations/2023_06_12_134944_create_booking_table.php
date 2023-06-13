<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Email');
            $table->date('CheckIn');
            $table->date('CheckOut');
            $table->float('NumberOffGuest');
            $table->float('NumberOffRooms');
            $table->string('TypeOffRooms');
            $table->string('SpecialRequest')->Nullable();
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
        Schema::dropIfExists('booking');
    }
};
