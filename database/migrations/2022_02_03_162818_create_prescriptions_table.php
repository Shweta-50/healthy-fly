<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->string('p_id');
            $table->string('doc_name');
            $table->string('name1')->nullable();
            $table->string('quantity1')->nullable();
            $table->string('days1')->nullable();
            $table->string('time1')->nullable();
            $table->string('name2')->nullable();
            $table->string('quantity2')->nullable();
            $table->string('days2')->nullable();
            $table->string('time2')->nullable();
            $table->string('name3')->nullable();
            $table->string('quantity3')->nullable();
            $table->string('days3')->nullable();
            $table->string('time3')->nullable();
            $table->string('name4')->nullable();
            $table->string('quantity4')->nullable();
            $table->string('days4')->nullable();
            $table->string('time4')->nullable();
            $table->string('name5')->nullable();
            $table->string('quantity5')->nullable();
            $table->string('days5')->nullable();
            $table->string('time5')->nullable();
            $table->string('description')->nullable();
            $table->unsignedBigInteger('patient_appointment_id');
            $table->foreign('patient_appointment_id')->references('id')->on('patient_appointment')->onDelete('cascade');
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
        Schema::dropIfExists('prescriptions');
    }
}
