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
        Schema::create('rights', function (Blueprint $table) {
            $table->id();
            $table->integer('tenant_id')->nullable();            
            $table->string('name',100)->nullable();
            $table->timestamps();
        });
        
        DB::table('rights')->insert([
            ['name' => 'viewtenants'],
            ['name' => 'edittenant'],
            ['name' => 'addtenant'],
            ['name' => 'deletetenant'],
            ['name' => 'viewusers'],
            ['name' => 'edituser'],
            ['name' => 'adduser'],
            ['name' => 'deleteuser'],
            ['name' => 'viewcustomers'],
            ['name' => 'editcustomer'],
            ['name' => 'addcustomer'],
            ['name' => 'deletecustomer'],
            ['name' => 'viewproducts'],
            ['name' => 'editproduct'],
            ['name' => 'addproduct'],
            ['name' => 'deleteproduct'],
            ['name' => 'viewoffers'],
            ['name' => 'editoffer'],
            ['name' => 'addoffer'],
            ['name' => 'deleteoffer'],
            ['name' => 'viewsubscriptions'],
            ['name' => 'editsubscription'],
            ['name' => 'addsubscription'],
            ['name' => 'deletesubscription'],
            ['name' => 'viewinvoices'],
            ['name' => 'addinvoice'],
            ['name' => 'editinvoice'],
            ['name' => 'deleteinvoice'],
            ['name' => 'viewbrands'],
            ['name' => 'addbrand'],
            ['name' => 'editbrand'],
            ['name' => 'deletebrand'],

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rights');
    }
};
