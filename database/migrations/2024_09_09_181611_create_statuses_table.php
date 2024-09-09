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
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->integer('tenant_id')->nullable();
            $table->string('name', 100)->nullable();
            $table->string('context', 100)->nullable();
            $table->timestamps();
        });

        DB::table('statuses')->insert([
            ['name' => 'New', 'context' => 'offer'],
            ['name' => 'Awaiting Acceptance', 'context' => 'offer'],
            ['name' => 'Accepted', 'context' => 'offer'],
            ['name' => 'Rejected', 'context' => 'offer'],
            ['name' => 'Deleted', 'context' => 'offer'],
            ['name' => 'New', 'context' => 'invoice'],
            ['name' => 'Awaiting Payment', 'context' => 'invoice'],
            ['name' => 'Payed', 'context' => 'invoice'],
            ['name' => 'Deleted', 'context' => 'invoice'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statuses');
    }
};
