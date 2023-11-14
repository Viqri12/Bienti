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
        Schema::create('rate_card_has_influencer', function (Blueprint $table) {
            $table->id();
            $table->string('price')->nullable(); 
            $table->unsignedBigInteger('socialmedia_has_influencer_id')->nullable();
            $table->unsignedBigInteger('rate_card_id')->nullable();
            $table->foreign('rate_card_id')->references('id')->on('Rate_card')->onDelete('cascade');   
            $table->foreign('socialmedia_has_influencer_id')->references('id')->on('socialmedia_has_influencer')->onDelete('cascade');    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rate_card_has_influencers');
    }
};
