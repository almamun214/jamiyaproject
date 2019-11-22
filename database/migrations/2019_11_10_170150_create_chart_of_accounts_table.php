<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChartOfAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chart_of_accounts', function (Blueprint $table) {
            $table->bigIncrements('chart_id');
            $table->string('accountCode');
            $table->string('title');
            $table->smallInteger('parentId');
            $table->tinyInteger('posted')->default(0);
            $table->boolean('status')->default(1)->comment('1=Active,2=Inactive');
            $table->tinyInteger('created_by')->nullable();
            $table->tinyInteger('updated_by')->nullable();

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
        Schema::dropIfExists('chart_of_accounts');
    }
}
