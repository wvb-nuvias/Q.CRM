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
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');            
            $table->int('user_id');
            $table->timestamps();
        });

        //TODO if email is linked to multiple tenants, then let choose tenant after logged in

        DB::table('tenants')->insert(
            ['name' => 'Q Continuum', 'email' => 'info@qcontinuum.be', 'user_id' => 1],
            ['name' => 'Q Continuum Demo', 'email' => 'info@qcontinuum.be', 'user_id' => 1]
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
};
