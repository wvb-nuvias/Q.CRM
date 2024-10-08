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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->integer('tenant_id')->nullable();            
            $table->string('name',100)->nullable();
            $table->timestamps();
        });

        //add roles : tenantadmin, admin, user
        DB::table('roles')->insert([
            ['name' => 'tenantadmin'],
            ['name' => 'admin'],
            ['name' => 'user'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
