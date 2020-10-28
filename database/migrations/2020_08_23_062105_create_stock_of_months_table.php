<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockOfMonthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_of_months', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->text('strength');
            $table->smallInteger('strength_cnt');
            $table->text('weekness');
            $table->smallInteger('weekness_cnt');
            $table->text('opportunity');
            $table->smallInteger('opportunity_cnt');
            $table->text('threats');
            $table->smallInteger('threats_cnt');
            $table->date('tip_date');
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
        Schema::dropIfExists('stock_of_months');
    }
}
