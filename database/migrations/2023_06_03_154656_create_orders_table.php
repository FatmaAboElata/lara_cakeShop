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
            $table->string('user_name');
            $table->string('user_email');
            $table->string('status')->nullable();
            $table->integer('user_phone');
            $table->string('user_city');
            $table->string('user_adress');
            $table->integer('product_id')->nullable();
            $table->string('product_name');
            $table->string('product_image');
            $table->integer('product_quantity');
            $table->integer('cost');
            $table->date('date');
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
