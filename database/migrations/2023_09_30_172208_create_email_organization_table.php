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
        Schema::create('email_organization', function (Blueprint $table) {
            $table->id();
            $table->integer('tenant_id');               
            $table->integer('organization_id')->nullable();
            $table->integer('email_id')->nullable();
            $table->timestamps();
        });

        DB::table('email_organization')->insert([
            'tenant_id' => 1,
            'organization_id' => 1,
            'email_id' => 1,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('email_organization');
    }
};
