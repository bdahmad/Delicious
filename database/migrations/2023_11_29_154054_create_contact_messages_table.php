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
        Schema::create('contact_messages', function (Blueprint $table) {
            $table->bigIncrements('con_msg_id');
            $table->string('con_msg_name',30)->nullable();
            $table->string('con_msg_email',30)->nullable();
            $table->string('con_msg_subject',30)->nullable();
            $table->string('con_msg_message',255)->nullable();
            $table->integer('con_msg_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_messages');
    }
};
