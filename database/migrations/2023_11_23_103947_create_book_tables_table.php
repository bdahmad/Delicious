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
        Schema::create('book_tables', function (Blueprint $table) {
            $table->bigIncrements('book_id');
            $table->string('book_name')->nullable();
            $table->string('book_email')->nullable();
            $table->string('book_phone')->nullable();
            $table->string('book_date')->nullable();
            $table->string('book_time')->nullable();
            $table->string('book_people')->nullable();
            $table->string('book_message')->nullable();
            $table->integer('book_status')->default(1);
            $table->integer('book_creator')->nullable();
            $table->integer('book_editor')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_tables');
    }
};
