<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('academic_id');
            $table->unsignedInteger('level_id');
            $table->unsignedInteger('feetype_id');
            $table->string('fee_heading',100)->nullable();
            $table->float('amount', 8, 2);
            $table->timestamps();


            $table->foreign('academic_id')->references('id')->on('academics');
            $table->foreign('level_id')->references('id')->on('levels');
            $table->foreign('feetype_id')->references('id')->on('feetypes');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fees');
    }
}
