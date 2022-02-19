<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('pid');
            $table->string('pname');
            $table->string('email');
            $table->string('phone');
            $table->Integer('amount');
            $table->string('doc_id')->nullable();
            $table->string('doc_name')->nullable();
            $table->string('payment_id')->nullable();
            $table->string('razorpay_id')->nullable();
            $table->boolean('payment_done')->default(false);

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
        Schema::dropIfExists('payments');
    }
}
