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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome', '80')->nullable(false);
            $table->string('endereco', '50')->nullable(false);
            $table->string('telefone','13')->nullable(false);
            $table->string('cpf', '13')->nullable(false);
            $table->string('email', '70')->nullable(false);
            $table->string('password', '16')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
