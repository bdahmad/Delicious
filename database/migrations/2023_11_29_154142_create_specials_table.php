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
        Schema::create('specials', function (Blueprint $table) {
            $table->bigIncrements('special_id');
            $table->string('special_name')->nullable();
            $table->string('special_details')->nullable();
            $table->string('special_image')->nullable();
            $table->integer('special_creator')->nullable();
            $table->integer('special_editor')->nullable();
            $table->integer('special_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specials');
    }
};
