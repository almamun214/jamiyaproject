<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralladgersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('generalladgers', function (Blueprint $table) {
            $table->bigIncrements('generalledger_id');
            $table->integer('generals_id');
            $table->smallInteger('form_id');
            $table->dateTime('date');
            $table->smallInteger('account_id');
            $table->decimal('debit', 10, 2);
            $table->decimal('credit', 10, 2);
            $table->string('note',120);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('generalladgers');
    }

}
