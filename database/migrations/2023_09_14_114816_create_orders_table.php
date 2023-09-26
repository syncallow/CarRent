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
            $table->string('guest_name')->nullable();
            $table->string('guest_lastname')->nullable();
            $table->string('guest_phone')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('car_id');
            $table->date('book_start_date');
            $table->date('book_end_date');
            $table->integer('total_price');

            $table->index('user_id', 'order_user_idx');
            $table->foreign('user_id','order_user_fk')->on('users')->references('id');
            $table->index('car_id', 'order_car_idx');
            $table->foreign('car_id','order_car_fk')->on('cars')->references('id');
            $table->softDeletes();
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
