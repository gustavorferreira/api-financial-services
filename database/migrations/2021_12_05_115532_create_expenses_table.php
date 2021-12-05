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
        Schema::create('sch_financial.expenses', function (Blueprint $table) {
            $table->integer('idpeo');
            $table->integer('expense_type_id');
            $table->decimal('value', 5,2);
            $table->integer('fees')->nullable();
            $table->date('expense_date');
            $table->date('reference_date');
            $table->timestamps();

            $table->foreign('idpeo')->references('idpeo')->on('sch_register.peoples');
            $table->foreign('expense_type_id')->references('id')->on('sch_financial.expenses_types');
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
