<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->integer('idpeo');
            $table->integer('expense_type_id');
            $table->decimal('value', 5,2);
            $table->integer('fees')->nullable();
            $table->date('expense_date');
            $table->date('reference_date');
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
        Schema::dropIfExists('expenses');
    }
}
