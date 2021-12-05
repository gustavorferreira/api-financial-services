<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeoplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sch_register.peoples', function (Blueprint $table) {
            $table->increments('idpeo');
            $table->string('name');
            $table->integer('registration_origin_id');
            $table->integer('status_id');
            $table->timestamps();

            $table->foreign('registration_origin_id')->references('id')->on('sch_register.registrations_origins');
            $table->foreign('status_id')->references('id')->on('sch_register.statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peoples');
    }
}
