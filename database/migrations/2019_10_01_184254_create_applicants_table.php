<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->bigIncrements('id');

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
            $table->boolean('active')->default(1);

            $table->rememberToken();


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
        Schema::dropIfExists('applicants');
    }
}
