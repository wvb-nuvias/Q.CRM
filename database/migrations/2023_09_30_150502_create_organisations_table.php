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
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('number')->nullable();
            $table->integer('organization_type_id')->nullable();
            $table->string('name',100)->nullable();
            $table->integer('managedby')->nullable();
        });
        
        DB::table('organizations')->insert([
            'number' => 1,
            'organization_type_id' => 1,
            'name' => 'the Q continuum',
            'managedby' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizations');
    }
};
