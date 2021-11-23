<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->char('serie',4);
            $table->string('number');
            $table->dateTime('dateofissue')->useCurrent();
            $table->dateTime('expirationdate')->useCurrent();
            $table->string('observation');
            $table->float('cargo');
            $table->float('igv');
            $table->float('subtotal');
            $table->float('total');
            $table->float('totalpaid');
            $table->float('pendingpayment');
            $table->boolean('editable');
            $table->unsignedBigInteger('idsunatdocument');
            $table->unsignedBigInteger('idwarehouse');
            $table->dateTime('registrationdate')->useCurrent();
            $table->unsignedBigInteger('idsaletype');
            $table->unsignedBigInteger('iduser');
            $table->unsignedBigInteger('idcustomer');
            $table->unsignedBigInteger('idcash');
            $table->boolean('state');

            $table->foreign('idsunatdocument')->references('id')->on('sunatdocument');
            $table->foreign('idwarehouse')->references('id')->on('warehouse');
            $table->foreign('idsaletype')->references('id')->on('saletype');
            $table->foreign('iduser')->references('id')->on('users');
            $table->foreign('idcustomer')->references('id')->on('customers');
            $table->foreign('idcash')->references('id')->on('cash');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
