<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VisionClinic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('street');
            $table->string('city');
            $table->string('phone');
            $table->string('email');
            $table->timestamps();
        });

        Schema::create('invoice', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('invoice_date');
            $table->timestamp('invoice_due')->nullable();
            $table->integer('invoice_status');
            $table->timestamp('ship_date')->nullable();
            $table->integer('patient_id');
            $table->timestamps();
        });

        Schema::create('invoice_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity');
            $table->float('unit_price');
            $table->integer('invoice_id');
            $table->integer('product_id');
            $table->timestamps();
        });

        Schema::create('appointment', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('appointment_time');
            $table->integer('appointment_type');
            $table->string('doctor_notes');
            $table->integer('patient_id');
            $table->timestamps();
        });

        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('msrp');
            $table->string('descriptions');
            $table->string('image');
            $table->string('category');
            $table->timestamps();
        });

        Schema::create('product_rebase', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_id');
            $table->timestamp('start')->nullable();
            $table->timestamp('end')->nullable();
            $table->float('rebate');
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
        Schema::drop('patient');
        Schema::drop('invoice');
        Schema::drop('invoice_detail');
        Schema::drop('appointment');
        Schema::drop('product');
        Schema::drop('product_rebase');
    }
}
