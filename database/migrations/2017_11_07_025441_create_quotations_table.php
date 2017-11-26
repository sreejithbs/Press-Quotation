<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reference_no')->unique();
            $table->date('date');
            $table->string('name');
            $table->string('customerID')->nullable();
            $table->integer('work_id')->unsigned();
            $table->integer('quantity');
            $table->string('size');
            $table->text('innerDetails');
            $table->text('outerDetails');
            $table->integer('binding_id')->unsigned();
            $table->text('included_jobs');
            $table->string('speed');
            $table->string('delivery_charge');
            $table->timestamps();

            $table->foreign('work_id')->references('id')->on('works')->onDelete('cascade');
            $table->foreign('binding_id')->references('id')->on('bindings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quotations');
    }
}
