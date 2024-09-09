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
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('offer_id')->nullable();
            $table->integer('invoice_id')->nullable();
            $table->integer('customer_id')->nullable();
            $table->integer('subscription_id')->nullable();
            $table->string('attachment',255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attachments');
    }
};
