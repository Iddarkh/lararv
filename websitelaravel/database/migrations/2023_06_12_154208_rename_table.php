<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up()
    {
        Schema::rename('booking', 'bookings');
    }

    public function down()
    {
        Schema::rename('booking', 'bookings');
    }
};
