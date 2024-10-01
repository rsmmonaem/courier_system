<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('shipment_id')->constrained('shipments')->onDelete('cascade');
            $table->decimal('amount', 15,2);
            $table->enum("status", ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::table('invoices', function(Blueprint $table){
            $table->dropForeign(['user_id']);
            $table->dropForeign(['shipment_id']);
        });

        Schema::dropIfExists('invoices');
    }
};
