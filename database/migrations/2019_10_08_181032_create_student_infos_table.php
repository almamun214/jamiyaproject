<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_infos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('applicantId');
            $table->string('form_no');
            $table->string('student_name');
            $table->string('phone')->nullable();
            $table->string('student_type')->nullable();
            $table->string('class');
            $table->string('section');
            $table->string('previous_class');
            $table->string('hotel');

            //$table->timestamp('admission_date')->nullable();

            $table->dateTime('admission_date')->nullable();
            $table->string('created_name');

            $table->string('admission_free');
            $table->string('rollNumber');
            $table->string('note');


            $table->boolean('active')->default(0);


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
        Schema::dropIfExists('student_infos');
    }
}
