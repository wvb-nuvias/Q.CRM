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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('customer_id')->nullable();
            $table->integer('contact_type_id')->nullable();
            $table->integer('job_id')->nullable();
            $table->string('lastname',100)->nullable();
            $table->string('firstname',100)->nullable(); 
            $table->string('gender',100)->nullable(); 
            $table->string('language',100)->nullable(); 
        });

        DB::table('contacts')->insert([
            'customer_id' => 1,
            'contact_type_id' => 1,
            'job_id' => 1,
            'lastname' => 'Continuum',
            'firstname' => 'Q',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
