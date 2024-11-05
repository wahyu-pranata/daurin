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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId("agency_id")->change()->nullable()->references("id")->on("agencies");
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->foreignId("user_id")->change()->references("id")->on("users")->onDelete("cascade")->onDelete("cascade");
            $table->foreignId("agency_id")->change()->references("id")->on("agencies")->onDelete("cascade")->onDelete("cascade");
            $table->foreignId("address_id")->change()->nullable()->references("id")->on("addresses")->onDelete("set null")->onUpdate("cascade");
        });

        Schema::table('item_order', function (Blueprint $table) {
            $table->foreignId("item_id")->change()->references("id")->on("items")->onDelete("cascade")->onUpdate("cascade");
            $table->foreignUuid("order_id")->change()->references("id")->on("orders")->onDelete("cascade")->onUpdate("cascade");
        });

        Schema::table('addresses', function (Blueprint $table) {
            $table->foreignId("user_id")->change()->references("id")->on("users")->onDelete("cascade")->onUpdate("cascade");
        });

        Schema::table('items', function (Blueprint $table) {
            $table->foreignId("agency_id")->change()->references("id")->on("agencies")->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
