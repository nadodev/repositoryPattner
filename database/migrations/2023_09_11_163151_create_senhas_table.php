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
        Schema::create('senhas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('username');
            $table->string('password');
            $table->enum('type', ['wp-admin', 'page', 'database', 'ftp', 'ssh', 'email', 'controle','other']);
            $table->string('website');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('senhas');
    }
};
