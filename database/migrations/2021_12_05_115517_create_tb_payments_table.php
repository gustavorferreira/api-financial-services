<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->integer('idpeo');
            $table->integer('expense_type_id');
            $table->timestamp('payment_date');
            $table->timestamps();

            $table->foreign('idpeo')->references('idpeo')->on('peoples');
            $table->foreign('expense_type_id')->references('id')->on('expenses_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_payments');
    }
}
