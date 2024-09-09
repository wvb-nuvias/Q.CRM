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
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->integer('tenant_id');            
            $table->integer('phone_type_id')->nullable();
            $table->string('number',100)->nullable();
            $table->timestamps();
        });

        DB::table('phones')->insert([
            'tenant_id' => 1,
            'phone_type_id' => 4,
            'number' => '0477 08 13 18',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phones');
    }
};
