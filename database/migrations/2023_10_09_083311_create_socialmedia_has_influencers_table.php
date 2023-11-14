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
        Schema::create('socialmedia_has_influencer', function (Blueprint $table) {
            $table->id();
            $table->string('followers')->nullable();
            $table->string('username')->nullable();
            $table->string('notes')->nullable();
            $table->string('link')->nullable();
            $table->unsignedBigInteger('influencer_id')->nullable();    
            $table->unsignedBigInteger('sosial_media_id')->nullable();
            $table->foreign('influencer_id')->references('id')->on('influencer')->onDelete('cascade');    
            $table->foreign('sosial_media_id')->references('id')->on('sosial_media')->onDelete('cascade');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socialmedia_has_influencers');
    }
};
