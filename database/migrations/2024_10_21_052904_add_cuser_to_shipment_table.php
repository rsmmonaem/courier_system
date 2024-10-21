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
        Schema::table('shipments', function (Blueprint $table) {
            $table->string('suser_name')->nullable();
            $table->string('suser_number')->nullable();
            $table->string('origin_address')->nullable();
            $table->string('ruser_name')->nullable();
            $table->string('ruser_number')->nullable();
            $table->string('destination_address')->nullable();
            $table->string('delivery_charge')->nullable();
            $table->string('service_charge')->nullable();
            $table->string('cod')->nullable();
            $table->string('total')->nullable();
            //Product Details
            $table->string('product_details')->nullable();
            $table->string('product_weight')->nullable();
            $table->string('product_lot')->nullable();
            $table->string('product_quantity')->nullable();
            $table->string('remark')->nullable();  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shipments', function (Blueprint $table) {
            $table->string('suser_name')->nullable();
            $table->string('suser_number')->nullable();
            $table->string('origin_address')->nullable();
            $table->string('ruser_name')->nullable();
            $table->string('ruser_number')->nullable();
            $table->string('destination_address')->nullable();
            $table->string('delivery_charge')->nullable();
            $table->string('service_charge')->nullable();
            $table->string('cod')->nullable();
            $table->string('total')->nullable();
            //Product Details
            $table->string('product_details')->nullable();
            $table->string('product_weight')->nullable();
            $table->string('product_lot')->nullable();
            $table->string('product_quantity')->nullable();
            $table->string('remark')->nullable();        
        });
    }
};
