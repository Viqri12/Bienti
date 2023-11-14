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
        Schema::create('comunity', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('username')->nullable();
            $table->string('followers')->nullable();
            $table->string('ig_link')->nullable();
            $table->string('tier')->nullable();
            $table->string('ig_photo_feed')->nullable();
            $table->string('ig_Photo_feed_carousel')->nullable();
            $table->string('ig_Story')->nullable();
            $table->string('ig_Reels')->nullable();
            $table->string('ig_Live')->nullable();
            $table->string('attending_Event')->nullable();
            $table->string('domisili')->nullable();
            $table->string('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comunities');
    }
};
