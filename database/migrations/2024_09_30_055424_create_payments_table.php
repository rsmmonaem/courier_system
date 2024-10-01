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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('shipment_id')->constraind('shipments')->onDelete('cascade');
            $table->decimal('amount');
            $table->string('payment_method');
            $table->enum('payment_status', ['completed', 'panding'] )->default('panding');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('payments', function(Blueprint $table){
            $table->dropForeign(['user_id']);
            $table->dropForeign(['shipment_id']);
        });
        Schema::dropIfExists('payments');
    }
};
