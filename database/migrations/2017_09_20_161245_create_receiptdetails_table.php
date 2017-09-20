<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiptdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receiptdetails', function (Blueprint $table) {
            $table->increments('id'); /* we may remove this */
            $table->unsignedInteger('receipt_id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('transaction_id');

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
        Schema::dropIfExists('receiptdetails');
    }
}
