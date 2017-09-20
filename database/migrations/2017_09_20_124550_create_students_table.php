<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->boolean('gender');
            $table->date('dob');
            $table->date('100')->nullable();
            $table->string('status');
            $table->string('nationality', 50)->nullable();
            $table->string('national_card',50)->nullable();
            $table->string('passport',50)->nullable();
            $table->string('phone', 50)->nullable();
            $table->string('village',50)->nullable();
            $table->string('commune',50)->nullable();
            $table->string('district',50)->nullable();
            $table->string('province',50)->nullable();
            $table->string('current_address',100)->nullable();
            $table->date('dateregistered');
            $table->unsignedInteger('user_id');
            $table->string('photo',200)->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
