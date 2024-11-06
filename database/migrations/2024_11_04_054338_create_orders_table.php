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
            $table->enum("delivery_option", ['dijemput', 'dibawa']);
            $table->enum("status", ["Belum Dikonfirmasi", "Dikonfirmasi", "Selesai", "Dibatalkan"])->default("Belum Dikonfirmasi");
            $table->integer("shipping_cost")->nullable();
            $table->string("transaction_proof")->nullable();
            $table->foreignId("user_id");
            $table->foreignId("agency_id");
            $table->foreignId("address_id");
            $table->date("ship_date");
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
