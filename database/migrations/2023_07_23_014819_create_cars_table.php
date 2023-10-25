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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('make');
            $table->string('model');
            $table->double('lat');
            $table->double('lng');
            $table->integer('year'); // Year of the car
            $table->string('color'); // Color of the car
            $table->text('description')->nullable(); // Description of the car
            $table->float('price_per_hour'); // Price per hour for renting the car
            $table->boolean('available')->default(true); // Is the car available for booking?
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
