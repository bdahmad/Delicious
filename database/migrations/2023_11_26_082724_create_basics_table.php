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
        Schema::create('basics', function (Blueprint $table) {
            $table->bigIncrements('basic_id');
            $table->string('basic_company_name',30)->nullable();
            $table->string('basic_title',40)->nullable();
            $table->string('basic_logo',50)->nullable();
            $table->string('basic_footer_logo',50)->nullable();
            $table->string('basic_favicon',50)->nullable();
            $table->string('basic_open_hour',50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basics');
    }
};
