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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('address_type_id')->nullable();
            $table->integer('ordinal')->nullable();
            $table->string('street',150)->nullable();
            $table->string('number',10)->nullable();
            $table->string('appartement',10)->nullable();
            $table->string('postal',10)->nullable();
            $table->string('city',150)->nullable();
            $table->string('region',150)->nullable();
            $table->string('country',150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
