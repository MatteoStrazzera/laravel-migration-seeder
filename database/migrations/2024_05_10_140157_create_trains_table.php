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
            $table->string('train_company', 20);
            $table->string('departure_station', 20);
            $table->string('arrival_station', 20);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code')->nullable();
            $table->tinyInteger('carriages_number')->nullable();
            $table->boolean('is_in_time')->default(1);
            $table->boolean('is_deleted')->default(0);
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
