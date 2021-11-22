<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier', function (Blueprint $table) {
            $table->id();
            $table->string('number',20);
            $table->string('fullname');
            $table->string('country',5);
            $table->string('ubigeo',100);
            $table->string('address');
            $table->string('condition',10);
            $table->string('status',10);
            $table->string('mail');
            $table->string('telephone',20);
            $table->float('totalsale');
            $table->boolean('state');
            $table->datetime('created');
            $table->datetime('update');
            $table->datetime('delete');
            $table->unsignedBigInteger('iddocumenttype');

            $table->foreign('iddocumenttype')->on('id')->references('documenttype');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplier');
    }
}
