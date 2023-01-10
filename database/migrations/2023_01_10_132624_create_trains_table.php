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
            $table->id();
            $table->string('company', 20);
            $table->string('departure_station', 30);
            $table->string('arrival_station', 30);
            $table->date('departure_date');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code', 10);
            $table->tinyInteger('coaches')->unsigned();
            $table->tinyInteger('is_ontime')->default(1);
            $table->tinyInteger('is_cancelled')->default(0);
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
