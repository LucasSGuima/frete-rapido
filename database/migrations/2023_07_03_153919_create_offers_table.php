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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('quotes_id');
            $table->string('carrier_name');
            $table->string('carrier_reference');
            $table->string('service');
            $table->decimal('final_price', 8, 2);
            $table->string('deadline');
            $table->timestamps();

            $table->foreign('quotes_id')->references('id')->on('quotes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
