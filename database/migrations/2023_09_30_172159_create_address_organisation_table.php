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
        Schema::create('address_organization', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('organization_id')->nullable();
            $table->integer('address_id')->nullable();
        });

        DB::table('address_organization')->insert([
            'organization_id' => 1,
            'address_id' => 1,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('address_organization');
    }
};
