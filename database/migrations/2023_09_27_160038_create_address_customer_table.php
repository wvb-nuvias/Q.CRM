<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('address_customer', function (Blueprint $table) {
            $table->id();
            $table->integer('tenant_id');            
            $table->integer('customer_id')->nullable();
            $table->integer('address_id')->nullable();
            $table->timestamps();
        });

        DB::table('address_customer')->insert([
            'tenant_id' => 1,
            'customer_id' => 1,
            'address_id' => 1,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('address_customer');
    }
};
