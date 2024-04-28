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
        Schema::create('OrderItem', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->string('color');
            $table->string('size');
            $table->string('totalPrice');
            $table->unsignedBigInteger('order_id');
            $table->integer('quantity');
            $table->timestamps();

            $table->index('product_id', 'product_idx');
            $table->index('order_id', 'order_idx');

            $table->foreign('order_id', 'order_fk')->references('id')->on('orders');
            $table->foreign('product_id', 'OrderItem_fk')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_product');
    }
};
