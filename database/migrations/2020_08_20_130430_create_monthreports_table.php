<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonthreportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthreports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('club_name');
            $table->string('month_name');
            $table->integer('last_memb');
            $table->integer('new_memb');
            $table->integer('drop_memb');
            $table->integer('total_memb');
            $table->integer('board_meet');
            $table->integer('attendance_1');
            $table->integer('regular_meet');
            $table->integer('attendance_2');
            $table->integer('num_prog');
            $table->string('project');
            $table->integer('mask');
            $table->integer('bod');
            $table->integer('training');
            $table->integer('handover');
            $table->integer('participants');
            $table->longText('participation_meeting');
            $table->longText('hosted_meeting');
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
        Schema::dropIfExists('monthreports');
    }
}
