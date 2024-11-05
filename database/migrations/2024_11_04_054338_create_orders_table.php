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
            $table->uuid("id")->primary();
            $table->string("delivery_option");
            $table->enum("status", ["pending", "progress", "success", "canceled"])->default("pending");
            $table->integer("shipping_cost");
            $table->string("transaction_proof");
            $table->foreignId("user_id");
            $table->foreignId("agency_id");
            $table->foreignId("address_id");
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
