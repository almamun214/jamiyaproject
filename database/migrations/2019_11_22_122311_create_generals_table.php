<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('generals', function (Blueprint $table) {
            $table->bigIncrements('generals_id');
            $table->smallInteger('form_id');
            $table->string('voucher_no',12);
            $table->dateTime('date');
            $table->smallInteger('pay_type');
            $table->smallInteger('pay_type_id');
            $table->float('vat_percent', 10, 2);
            $table->float('vat_amount', 10, 2);
            $table->float('discount', 10, 2);
            $table->float('discount_amount', 10, 2);
            $table->decimal('debit', 10, 2);
            $table->decimal('credit', 10, 2);
            $table->string('narration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('generals');
    }

}
