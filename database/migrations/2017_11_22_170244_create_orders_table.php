<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('quotation_ref')->unique();
            $table->string('orderID')->unique();
            $table->string('customerID')->nullable();
            $table->integer('work_id')->unsigned();
            $table->date('delivery_date');
            $table->string('delivery_charge');
            $table->string('total_amt');
            $table->string('advance_amt');
            $table->string('balance_amt');

            $table->foreign('work_id')->references('id')->on('works')->onDelete('cascade');
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
