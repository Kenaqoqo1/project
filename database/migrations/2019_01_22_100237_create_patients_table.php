<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
          $table->increments('patiet_id');
          $table->string('firstName');
          $table->string('secondName');
          $table->string('gender');
          $table->date('date_of_birth');
          $table->string('parent_name');
          $table->integer('phoneWork');
          $table->integer('phoneHome');
          $table->string('patiet_insuarance');
          $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
