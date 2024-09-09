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
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->integer('tenant_id')->nullable();            
            $table->string('name',100)->nullable();
            $table->timestamps();
        });
        
        DB::table('brands')->insert([
            ['name' => 'Q'],
            ['name' => 'Apple'],
            ['name' => 'Samsung'],
            ['name' => 'Google'],
            ['name' => 'Microsoft'],
            ['name' => 'Sony'],
            ['name' => 'LG'],
            ['name' => 'OnePlus'],
            ['name' => 'Asus'],
            ['name' => 'Lenovo'],
            ['name' => 'HP'],
            ['name' => 'Dell'],
            ['name' => 'Acer'],
            ['name' => 'Toshiba'],
            ['name' => 'Fujitsu'],
            ['name' => 'Panasonic'],
            ['name' => 'Sony'],
            ['name' => 'Philips'],
            ['name' => 'JBL'],
            ['name' => 'Bose'],
            ['name' => 'Infinigate'],            
        ]);            
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
