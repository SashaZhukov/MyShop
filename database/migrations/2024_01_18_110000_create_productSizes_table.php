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
        Schema::create('productSizes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('size_id');
            $table->boolean('status');

            $table->index('product_id', 'product_idx');
            $table->index('size_id', 'size_idx');

            $table->foreign('product_id', 'product_fk')->on('products')->references('id');
            $table->foreign('size_id', 'size_fk')->on('sizes')->references('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productSizes');
    }
};
