<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50);
            $table->string('departure_station', 50);
            $table->string('arrive_station', 50);
            $table->dateTime('departure_time');
            $table->dateTime('arrive_time');
            $table->string('train_code', 30);
            $table->tinyInteger('carriages_number')->unsigned();
            $table->tinyInteger('is_on_time')->default(1);
            $table->tinyInteger('is_canceled')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
