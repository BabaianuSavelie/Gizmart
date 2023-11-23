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
        Schema::create('product_characteristics', function (Blueprint $table) {
            $table->uuid('id');

            $table->uuid('product_id');
            $table->id('characteristic_id');

            $table->string('value');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('characteristic_id')->references('id')->on('characteristics')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_characteristics');
    }
};
