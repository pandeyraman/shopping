<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerPaymentMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_payment_methods', function (Blueprint $table) {
            $table->increments('customer_payment_id');
            $table->integer('customer_id')->unsigned();
            $table->integer('payment_method_code')->unsigned();
            $table->integer('credit_card_number');
            $table->string('payment_method_details');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('payment_method_code')->references('payment_method_code')->on('ref_payment_methods');
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
        Schema::dropIfExists('customer_payment_methods');
    }
}
