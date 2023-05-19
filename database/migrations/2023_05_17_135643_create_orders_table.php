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
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name')->default(null);
            $table->string('email')->default(null);
            $table->string('phone')->default(null);
            $table->double('amount')->default(null);
            $table->string('status')->default(null);
            $table->string('address');
            $table->string('transaction_id');
            $table->string('currency')->default(null);
            $table->integer('cus_id');
            $table->integer('ship_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
