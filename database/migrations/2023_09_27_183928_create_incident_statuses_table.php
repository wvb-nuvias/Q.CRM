<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('incident_statuses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name',100)->nullable();            
        });

        DB::table('incident_statuses')->insert([
            ['name' => 'New'],
            ['name' => 'Progress'],
            ['name' => 'On Hold'],
            ['name' => 'Waiting for Customer'],
            ['name' => 'Waiting for Supplier'],
            ['name' => 'Closed'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incident_statuses');
    }
};
