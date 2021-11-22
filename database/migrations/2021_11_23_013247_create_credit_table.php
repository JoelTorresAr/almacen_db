<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('idsale');
            $table->float('amount');
            $table->float('amountpayment');
            $table->float('deuda');
            $table->datetime('created');
            $table->datetime('update');
            $table->datetime('delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credit');
    }
}
