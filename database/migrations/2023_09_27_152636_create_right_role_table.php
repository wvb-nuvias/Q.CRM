<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('right_role', function (Blueprint $table) {
            $table->id();
            $table->integer('tenant_id')->nullable();            
            $table->integer('role_id')->nullable();
            $table->integer('right_id')->nullable();
            $table->timestamps();
        });

        //add all right to tenantadmin role (32)
        DB::table('right_role')->insert([
            ['role_id' => 1, 'right_id' => 1],
            ['role_id' => 1, 'right_id' => 2],
            ['role_id' => 1, 'right_id' => 3],
            ['role_id' => 1, 'right_id' => 4],
            ['role_id' => 1, 'right_id' => 5],
            ['role_id' => 1, 'right_id' => 6],
            ['role_id' => 1, 'right_id' => 7],
            ['role_id' => 1, 'right_id' => 8],
            ['role_id' => 1, 'right_id' => 9],
            ['role_id' => 1, 'right_id' => 10],
            ['role_id' => 1, 'right_id' => 11],
            ['role_id' => 1, 'right_id' => 12],
            ['role_id' => 1, 'right_id' => 13],
            ['role_id' => 1, 'right_id' => 14],
            ['role_id' => 1, 'right_id' => 15],
            ['role_id' => 1, 'right_id' => 16],
            ['role_id' => 1, 'right_id' => 17],
            ['role_id' => 1, 'right_id' => 18],
            ['role_id' => 1, 'right_id' => 19],
            ['role_id' => 1, 'right_id' => 20],
            ['role_id' => 1, 'right_id' => 21],
            ['role_id' => 1, 'right_id' => 22],
            ['role_id' => 1, 'right_id' => 23],
            ['role_id' => 1, 'right_id' => 24],
            ['role_id' => 1, 'right_id' => 25],
            ['role_id' => 1, 'right_id' => 26],
            ['role_id' => 1, 'right_id' => 27],
            ['role_id' => 1, 'right_id' => 28],
            ['role_id' => 1, 'right_id' => 29],
            ['role_id' => 1, 'right_id' => 30],
            ['role_id' => 1, 'right_id' => 31],
            ['role_id' => 1, 'right_id' => 32],
            ['role_id' => 2, 'right_id' => 5],
            ['role_id' => 2, 'right_id' => 6],
            ['role_id' => 2, 'right_id' => 7],
            ['role_id' => 2, 'right_id' => 8],
            ['role_id' => 2, 'right_id' => 9],
            ['role_id' => 2, 'right_id' => 10],
            ['role_id' => 2, 'right_id' => 11],
            ['role_id' => 2, 'right_id' => 12],
            ['role_id' => 2, 'right_id' => 13],
            ['role_id' => 2, 'right_id' => 14],
            ['role_id' => 2, 'right_id' => 15],
            ['role_id' => 2, 'right_id' => 16],
            ['role_id' => 2, 'right_id' => 17],
            ['role_id' => 2, 'right_id' => 18],
            ['role_id' => 2, 'right_id' => 19],
            ['role_id' => 2, 'right_id' => 20],
            ['role_id' => 2, 'right_id' => 21],
            ['role_id' => 2, 'right_id' => 22],
            ['role_id' => 2, 'right_id' => 23],
            ['role_id' => 2, 'right_id' => 24],
            ['role_id' => 2, 'right_id' => 25],
            ['role_id' => 2, 'right_id' => 26],
            ['role_id' => 2, 'right_id' => 27],
            ['role_id' => 2, 'right_id' => 28],
            ['role_id' => 2, 'right_id' => 29],
            ['role_id' => 2, 'right_id' => 30],
            ['role_id' => 2, 'right_id' => 31],
            ['role_id' => 2, 'right_id' => 32],
            

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('right_role');
    }
};
