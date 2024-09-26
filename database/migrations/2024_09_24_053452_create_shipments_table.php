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
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('origin_address_id')->constrained('addresses')->onDelete('cascade');
            $table->foreignId('destination_address_id')->constrained('addresses')->onDelete('cascade');
            $table->string('status');
            $table->string('tracking_number')->unique();
            $table->timestamp('scheduled_pickup_date')->nullable();
            $table->timestamp('delivery_date')->nullable();
            $table->decimal('price', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipments');
    }
};
