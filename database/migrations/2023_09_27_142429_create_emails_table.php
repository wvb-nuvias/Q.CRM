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
        Schema::create('emails', function (Blueprint $table) {
            $table->id();
            $table->integer('tenant_id');            
            $table->integer('email_type_id')->nullable();
            $table->string('address',100)->nullable();
            $table->timestamps();
        });
        
        DB::table('emails')->insert([
            'tenant_id' => 1,
            'email_type_id' => 2,
            'address' => 'info@qcontinuum.be',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emails');
    }
};
