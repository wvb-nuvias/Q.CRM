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
        Schema::create('phone_types', function (Blueprint $table) {
            $table->id();
            $table->integer('tenant_id')->nullable();             
            $table->string('name',100)->nullable();
            $table->timestamps();
        });

        DB::table('phone_types')->insert([
            ['name' => 'Home'],
            ['name' => 'Work'],
            ['name' => 'Mobile Home'],
            ['name' => 'Mobile Work'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phone_types');
    }
};
