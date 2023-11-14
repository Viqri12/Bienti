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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('ig_link')->nullable();
            $table->string('followers')->nullable();
            $table->string('tier')->nullable();
            $table->string('ig_photo_feed')->nullable();
            $table->string('ig_Photo_feed_carousel')->nullable();
            $table->string('ig_Story')->nullable();
            $table->string('ig_story_with_link')->nullable();
            $table->string('press_release')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
