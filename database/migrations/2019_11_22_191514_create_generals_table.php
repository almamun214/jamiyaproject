<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generals', function (Blueprint $table) {
            $table->bigIncrements('generals_id');
            $table->smallInteger('form_id');
            $table->string('voucher_no')->nullable();
            $table->date('date');
            $table->smallInteger('pay_type')->nullable();
            $table->smallInteger('pay_type_id')->nullable();
            $table->float('vat_percent')->nullable();
            $table->float('vat_amount')->nullable();
            $table->float('discount')->nullable();
            $table->float('discount_amount')->nullable();
            $table->decimal('debit')->nullable();
            $table->decimal('credit')->nullable();
            $table->string('narration')->nullable();
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
        Schema::dropIfExists('generals');
    }
}
