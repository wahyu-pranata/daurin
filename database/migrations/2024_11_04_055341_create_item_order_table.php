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
        Schema::create('item_order', function (Blueprint $table) {
            $table->id();
            $table->foreignId("item_id")->references("id")->on("items")->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId("order_id")->references("id")->on("orders")->onDelete("cascade")->onUpdate("cascade");
            $table->integer("price")->nullable();
            $table->string("image");
            $table->integer("amount");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_order');
    }
};