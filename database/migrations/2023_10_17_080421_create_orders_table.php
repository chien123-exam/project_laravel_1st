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
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->date('order_date');
            $table->decimal('total_price', 20, 0)->comment('Tổng giá (VNĐ)');
            $table->string('shipping_address');
            $table->string('status')->default('Chờ xác nhận');
            $table->tinyInteger('payment_method')->nullable();
            $table->tinyInteger('shipping_method')->nullable();
            $table->string('course_name');
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('customer_phone');
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
