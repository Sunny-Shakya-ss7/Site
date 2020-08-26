<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreasurersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treasurers', function (Blueprint $table) {
            $table->id();
            $table->string('club_name');
            $table->string('month_name');

            $table->string('admin_expenses');
            $table->string('admin_amount1');
            $table->string('admin_income');
            $table->string('admin_amount2');

            $table->string('serv_expenses');
            $table->string('serv_amount1');
            $table->string('serv_income');
            $table->string('serv_amount2');

            $table->integer('tot_cash');
            $table->integer('tot_fund');

            $table->string('tr_prefix');
            $table->string('tr_fname');
            $table->string('tr_lname');
            $table->BigInteger('tr_cont_num');

            $table->string('jtr_prefix')->nullable();
            $table->string('jtr_fname')->nullable();
            $table->string('jtr_lname')->nullable();
            $table->BigInteger('jtr_cont_num')->nullable();

            $table->string('jtr_prefix_1')->nullable();
            $table->string('jtr_fname_1')->nullable();
            $table->string('jtr_lname_1')->nullable();

            $table->integer('admin_amount1_total');
            $table->integer('admin_amount2_total');
            $table->integer('serv_amount1_total');
            $table->integer('serv_amount2_total');
            

            
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
        Schema::dropIfExists('treasurers');
    }
}
