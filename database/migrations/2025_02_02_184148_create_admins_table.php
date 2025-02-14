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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->integer('creator_id');
            $table->string('foto');
            $table->string('name');
            $table->date('data_de_nascimento');
            $table->string('cpf')->unique();
            $table->string('telefone');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('rua');
            $table->string('numero');
            $table->string('bairro');
            $table->foreignId('cidade')->references('id')->on('cidades')->constrained();
            $table->string('cep');
            $table->string('complemento')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
