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
            $table->int('organization_id');
            $table->int('contact_id');
            $table->timestamps();
        });

        DB::table('tenants')->insert([
            'name' => 'Q Continuum',
            'email' => 'info@qcontinuum.be',
            'organization_id' => 1,
            'contact_id' => 1,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
};
