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
        Schema::create('email_contact', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('contact_id')->nullable();
            $table->integer('email_id')->nullable();
        });
        
        DB::table('email_contact')->insert([
            'contact_id' => 1,
            'email_id' => 1,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('email_contact');
    }
};
