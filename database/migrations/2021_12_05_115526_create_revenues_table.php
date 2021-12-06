<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revenues', function (Blueprint $table) {
            $table->integer('idpeo');
            $table->integer('revenue_type_id');
            $table->decimal('value', 5,2);
            $table->integer('fees')->nullable();
            $table->date('revenue_date');
            $table->date('reference_date');
            $table->timestamps();

            $table->foreign('idpeo')->references('idpeo')->on('peoples');
            $table->foreign('revenue_type_id')->references('id')->on('revenues_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('revenues');
    }
}
