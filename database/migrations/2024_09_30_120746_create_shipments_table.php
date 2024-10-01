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
            $table->string("tracking_number");
            $table->dateTime('scheduled_pickup_date');
            $table->dateTime('delivery_date');
            $table->decimal('price');
            $table->enum('status',['active', 'inactive']);

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shipments', function(Blueprint $table){
            $table->dropForeign(['user_id']);
            $table->dropForeign(['origin_address_id', 'destination_address_id']);
        });

        Schema::dropIfExists('shipments');
    }
};
