<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientAppointmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_appointment', function (Blueprint $table) {
            $table->id();
            $table->string('p_id');
            $table->string('profile_photo')->nullable();
            $table->string('pname');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('gender');
            $table->string('apoint_date');
            $table->string('apoint_day');
            $table->string('apoint_time');
            $table->string('disease');
            $table->string('disease_desc');
            $table->string('document')->nullable();
            $table->string('doc_id');
            $table->string('doc_name');
            $table->string('doc_profile');
            $table->string('doc_specialities');
            $table->string('fees');
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
        Schema::dropIfExists('patient_appointment');
    }
}
