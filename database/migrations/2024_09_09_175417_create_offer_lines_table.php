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
        Schema::create('offer_lines', function (Blueprint $table) {
            $table->id();
            $table->integer('offer_id');
            $table->integer('product_id')->nullable();            
            $table->integer('quantity')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->decimal('discount', 10, 2)->nullable();
            $table->integer('unit_type_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offer_lines');
    }
};
