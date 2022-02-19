<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_feedback', function (Blueprint $table) {
            $table->id();
            $table->string('p_id');
            $table->string('p_name');
            $table->string('p_profile');
            $table->string('d_id');
            $table->string('d_profile');
            $table->string('d_name');
            $table->string('d_specialist');
            $table->string('feedback');
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
        Schema::dropIfExists('patient_feedback');
    }
}
