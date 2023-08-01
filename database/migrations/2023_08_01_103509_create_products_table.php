<?php

use App\Models\Category;
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
            $table->text('description');            
            $table->float('price');            
            $table->integer('quantity'); 
            $table->foreignId('categoryId')->constrained('categories');
            $table->unsignedBigInteger('sizeId')->nullable();
            $table->unsignedBigInteger('colorId')->nullable();                    
            $table->string('photo');            
            $table->timestamps();
            $table->foreign('sizeId')->references('id')->on('sizes');
            $table->foreign('colorId')->references('id')->on('colors');
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
