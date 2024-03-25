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
        Schema::create('productColor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('color_id');
            $table->boolean('status');

            $table->index('product_id', 'product_idx');
            $table->index('color_id', 'color_idx');

            $table->foreign('product_id', 'product_fk_color')->on('products')->references('id');
            $table->foreign('color_id', 'color_fk')->on('colors')->references('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_product_color');
    }
};
