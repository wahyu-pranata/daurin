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
            $table->uuid();
            $table->string("delivery_option");
            $table->enum("status", ["pending", "progress", "success", "canceled"])->default("pending");
            $table->integer("shipping_cost");
            $table->string("transaction_proof");
            $table->foreignId("user_id")->references("id")->on("users")->onDelete("cascade")->onDelete("cascade");
            $table->foreignId("agency_id")->references("id")->on("agencies")->onDelete("cascade")->onDelete("cascade");
            $table->foreignId("address_id")->references("id")->on("addresses")->onDelete("set null")->onUpdate("cascade");
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