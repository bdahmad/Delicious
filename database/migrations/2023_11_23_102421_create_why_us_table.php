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
        Schema::create('why_us', function (Blueprint $table) {
            $table->bigIncrements('why_id');
            $table->string('why_title')->nullable();
            $table->string('why_description')->nullable();
            $table->integer('why_status')->default(1);
            $table->integer('why_creator')->nullable();
            $table->integer('why_editor')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('why_us');
    }
};
