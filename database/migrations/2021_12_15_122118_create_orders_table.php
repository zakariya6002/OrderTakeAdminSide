<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('customer_id')->nullable();
            // $table->foreign('customer_id')->references('id')->on('customers');
            // $table->unsignedBigInteger('product_id')->nullable();
            // $table->foreign('product_id')->references('id')->on('products');
            // $table->unsignedBigInteger('user_id')->nullable();
            // $table->foreign('user_id')->references('id')->on('users');
            $table->string('customer_name')->nullable();
            $table->string('category_name')->nullable();
            $table->integer('quantity');
            $table->datetime('requireddate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
