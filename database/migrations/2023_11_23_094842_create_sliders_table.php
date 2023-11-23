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
        Schema::create('sliders', function (Blueprint $table) {
            $table->bigIncrements('slider_id');
            $table->string('slider_name')->unique();
            $table->string('slider_title')->unique();
            $table->string('slider_image')->nullable();
            $table->integer('slider_status')->default(1);
            $table->integer('slider_creator')->nullable();
            $table->integer('slider_editor')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
