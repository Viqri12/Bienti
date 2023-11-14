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
        Schema::create('influencer_has_category', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_influencer_id')->nullable();
            $table->unsignedBigInteger('influencer_id')->nullable();
            $table->foreign('category_influencer_id')->references('id')->on('category_influencer')->onDelete('cascade');
            $table->foreign('influencer_id')->references('id')->on('influencer')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('influencer_has_categories');
    }
};
