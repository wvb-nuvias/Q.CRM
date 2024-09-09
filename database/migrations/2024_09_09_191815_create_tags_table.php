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
        //TODO use same idea with context and contextid for types (QType model)

        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->integer('tenant_id')->nullable();
            $table->string('name', 100)->nullable();
            $table->string('context', 100)->nullable();
            $table->integer('context_id')->nullable();
            $table->timestamps();
        });

        DB::table('tags')->insert([
            ['name' => 'Customer'],
            ['name' => 'Supplier'],
            ['name' => 'Employee'],
            ['name' => 'Partner'],
            ['name' => 'Competitor'],
            ['name' => 'Lead'],
            ['name' => 'Opportunity'],
            ['name' => 'Project'],
            ['name' => 'Task'],
            ['name' => 'Event'],
            ['name' => 'Note'],
            ['name' => 'Document'],
            ['name' => 'Urgent'],
            ['name' => 'Review'],
            ['name' => 'ToDo']            
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};
