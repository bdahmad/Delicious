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
        Schema::create('socials', function (Blueprint $table) {
            $table->bigIncrements('social_id');
            $table->string('social_facebook')->nullable();
            $table->string('social_twitter')->nullable();
            $table->string('social_linkedin')->nullable();
            $table->string('social_instagram')->nullable();
            $table->string('social_wechat')->nullable();
            $table->string('social_whatsapp')->nullable();
            $table->string('social_discord')->nullable();
            $table->string('social_telegram')->nullable();
            $table->string('social_github')->nullable();
            $table->string('social_reddit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socials');
    }
};
