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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('descricao');
            $table->foreignId('category_id')->constrained();
            $table->string('thumbnail');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->integer('preco')->unsigned();
            $table->integer('desconto')->unsigned();
            $table->integer('quantd_vendidas')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
