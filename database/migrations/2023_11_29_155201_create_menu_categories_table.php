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
        Schema::create('menu_categories', function (Blueprint $table) {
            $table->bigIncrements('menu_category_id');
            $table->string('menu_category_name')->nullable();
            $table->string('menu_category_slug')->nullable();
            $table->integer('menu_category_creator')->nullable();
            $table->integer('menu_category_editor')->nullable();
            $table->integer('menu_category_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_categories');
    }
};
