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
        Schema::create('chefs', function (Blueprint $table) {
            $table->bigIncrements('chef_id');
            $table->string('chef_name')->nullable();
            $table->string('chef_designation')->nullable();
            $table->string('chef_facebook')->nullable();
            $table->string('chef_twitter')->nullable();
            $table->string('chef_instagram')->nullable();
            $table->string('chef_linkedin')->nullable();
            $table->string('chef_image')->nullable();
            $table->integer('chef_status')->default(1);
            $table->integer('chef_creator')->nullable();
            $table->integer('chef_editor')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chefs');
    }
};
