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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->integer('tenant_id');                  
            $table->integer('subscription_type_id')->nullable();
            $table->integer('customer_id');     //end-customer
            $table->integer('organization_id'); //partner/reseller
            $table->string('code',20)->nullable();
            $table->string('name',100)->nullable();
            $table->text('description')->nullable();
            $table->integer('invoicetype')->nullable();   
            $table->float('cost', 8, 2)->nullable();
            $table->timestamp('subscriptionstart')->nullable();
            $table->timestamp('subscriptionend')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
