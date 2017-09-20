<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentfeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentfees', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('fee_id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('level_id');
            $table->float('amount',8,2);
            $table->timestamps();

            $table->foreign('fee_id')->references('id')->on('fees');
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('level_id')->references('id')->on('levels');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studentfees');
    }
}
