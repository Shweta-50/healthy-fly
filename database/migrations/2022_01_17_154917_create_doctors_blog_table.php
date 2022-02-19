<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors_blog', function (Blueprint $table) {
            $table->id();
            $table->string('doc_id');
            $table->string('profile_photo');
            $table->string('doc_name');
            $table->string('doc_email');
            $table->string('doc_specilist');
            $table->string('blog_title');
            $table->text('blog');
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
        Schema::dropIfExists('doctors_blog');
    }
}
