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
        Schema::create('q_types', function (Blueprint $table) {
            $table->id();
            $table->integer('tenant_id')->nullable();
            $table->string('name', 100)->nullable();
            $table->string('context', 100)->nullable();
            $table->timestamps();
        });

        DB::table('q_types')->insert([
            ['name' => 'Home', 'context' => 'address'],
            ['name' => 'Work', 'context' => 'address'],            
            ['name' => 'Normal', 'context' => 'customer'],
            ['name' => 'Reseller', 'context' => 'customer'],
            ['name' => 'Person', 'context' => 'customer'],
            ['name' => 'Normal', 'context' => 'contact'],            
            ['name' => 'Person', 'context' => 'contact'],
            ['name' => 'Home', 'context' => 'phone'],
            ['name' => 'Work', 'context' => 'phone'],
            ['name' => 'Mobile Home', 'context' => 'phone'],
            ['name' => 'Mobile Work', 'context' => 'phone'],
            ['name' => 'Home', 'context' => 'email'],
            ['name' => 'Work', 'context' => 'email'],
            ['name' => 'Per Day', 'context' => 'unit'],
            ['name' => 'Per Device', 'context' => 'unit'],    
            ['name' => 'Per Hour', 'context' => 'unit'],        
            ['name' => 'Per Project', 'context' => 'unit'],
            ['name' => 'Per Unit', 'context' => 'unit'],
            ['name' => 'Service', 'context' => 'product'],
            ['name' => 'Development', 'context' => 'product'],            
            ['name' => 'Analysis', 'context' => 'product'],
            ['name' => 'Device', 'context' => 'product'],
            ['name' => '3D printing', 'context' => 'product'],
            ['name' => 'Monthly', 'context' => 'subscription'],
            ['name' => 'Yearly', 'context' => 'subscription'],            
            ['name' => 'Quarterly', 'context' => 'subscription'],            
            ['name' => 'Forever', 'context' => 'subscription'],
            ['name' => 'Service Provider', 'context' => 'organization'],
            ['name' => 'Normal', 'context' => 'organization'],
            ['name' => 'Prospect', 'context' => 'organization'],
            ['name' => 'Reseller', 'context' => 'organization'], 
            ['name' => 'Web Page', 'context' => 'link']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('q_types');
    }
};
