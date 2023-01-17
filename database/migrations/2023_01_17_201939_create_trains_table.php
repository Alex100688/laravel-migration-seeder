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
        Schema::create('trains', function (Blueprint $table) {
            $table->string('agency', 50);
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->string('time_departure', 20);
            $table->string('time_arrival', 20);
            $table->unsignedTinyInteger('code_train');
            $table->unsignedTinyInteger('carriage_number');
            $table->boolean('is_in_time')->default(1);
            $table->boolean('is_delate')->default(1);
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
        Schema::dropIfExists('trains');
    }
};
