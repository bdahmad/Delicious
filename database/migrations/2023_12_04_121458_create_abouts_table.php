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
        Schema::create('abouts', function (Blueprint $table) {
            $table->bigIncrements("about_id");
            $table->string("about_title")->nullable();
            $table->string("about_descrip1")->nullable();
            $table->string("about_descrip2")->nullable();
            $table->string("about_offer1")->nullable();
            $table->string("about_offer2")->nullable();
            $table->string("about_offer3")->nullable();
            $table->string("about_video")->nullable();
            $table->integer("about_status")->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
