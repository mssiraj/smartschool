<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->date('transaction_date');
            $table->unsignedInteger('fee_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('studentfees_id');
            $table->float('paid',8,2);
            $table->string('remark',50)->nullable();
            $table->string('description',100)->nullable();
            $table->timestamps();

            $table->foreign('fee_id')->references('id')->on('fees');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('student_id')->references('id')->on('students');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
