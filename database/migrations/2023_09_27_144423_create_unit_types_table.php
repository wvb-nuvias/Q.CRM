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
        Schema::create('unit_types', function (Blueprint $table) {
            $table->id();
            $table->integer('tenant_id')->nullable();            
            $table->string('name',100)->nullable();
            $table->timestamps();
        });

        DB::table('unit_types')->insert([            
            ['name' => 'Per Day'],
            ['name' => 'Per Device'],    
            ['name' => 'Per Hour'],        
            ['name' => 'Per Project'],
            ['name' => 'Per Unit']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unit_types');
    }
};
