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
        Schema::create('ligne_commandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('commandeId');
            $table->unsignedBigInteger('productId');
            $table->integer('quantity');
            $table->timestamps();

             // Define foreign keys
        $table->foreign('commandeId')->references('id')->on('commandes')->onDelete('cascade');
        $table->foreign('productId')->references('id')->on('products')->onDelete('cascade');
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ligne_commandes');
    }
};
