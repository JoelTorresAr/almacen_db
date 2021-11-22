<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankaccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bankaccounts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cci');
            $table->string('accountnumber');
            $table->float('total');
            $table->boolean('state');
            $table->unsignedBigInteger('idpaymentmethods');

            $table->foreign('idpaymentmethods')->on('id')->references('paymentmethods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bankaccounts');
    }
}
