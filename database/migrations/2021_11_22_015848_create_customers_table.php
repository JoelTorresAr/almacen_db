<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('number',20);
            $table->string('fullname');
            $table->string('country',5);
            $table->string('ubigeo');
            $table->string('address');
            $table->string('condition',10);
            $table->string('status',10);
            $table->string('mail');
            $table->boolean('state');
            $table->string('telephone',20);
            $table->datetime('created');
            $table->datetime('update');
            $table->datetime('delete');
            $table->float('totalpurchase');
            $table->unsignedBigInteger('iddocumenttype');

            $table->foreign('iddocumenttype')->references('id')->on('documenttype');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
