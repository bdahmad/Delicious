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
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('menu_id');
            $table->string('menu_name')->nullable();
            $table->string('menu_price')->nullable();
            $table->string('menu_ingredients')->nullable();
            $table->integer('menu_status')->default(1);
            $table->integer('menu_creator')->nullable();
            $table->integer('menu_editor')->nullable();
            $table->integer('menu_category')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
