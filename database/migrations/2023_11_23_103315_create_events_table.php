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
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('event_id');
            $table->integer('event_price')->nullable();
            $table->string('event_description1')->nullable();
            $table->string('event_offer1')->nullable();
            $table->string('event_offer2')->nullable();
            $table->string('event_offer3')->nullable();
            $table->string('event_description2')->nullable();
            $table->integer('event_creator')->nullable();
            $table->integer('event_editor')->nullable();
            $table->integer('event_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
