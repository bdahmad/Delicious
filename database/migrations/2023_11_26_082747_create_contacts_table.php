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
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('contact_id');
            $table->string('contact_phone1',15)->nullable();
            $table->string('contact_phone2',15)->nullable();
            $table->string('contact_phone3',15)->nullable();
            $table->string('contact_phone4',15)->nullable();
            $table->string('contact_email1',30)->nullable();
            $table->string('contact_email2',30)->nullable();
            $table->string('contact_email3',30)->nullable();
            $table->string('contact_email4',30)->nullable();
            $table->string('contact_address1')->nullable();
            $table->string('contact_address2')->nullable();
            $table->string('contact_address3')->nullable();
            $table->string('contact_address4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
