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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name',100)->nullable();
        });
        
        DB::table('jobs')->insert([
            ['name' => 'Manager'],
            ['name' => 'Sales Person'],
            ['name' => 'Sales Manager'],
            ['name' => 'Technical Manager'],
            ['name' => 'Support Engineer'],
            ['name' => 'Security Engineer'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
