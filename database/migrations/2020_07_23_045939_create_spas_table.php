<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Leo_Club_Official_Email_Address')->nullable();
            $table->string('Leo_Club_Name');
            $table->string('Activity_Name')->nullable();
            $table->string('Activity_Level');
            $table->string('Active_Duration');
            $table->date('Start_Date');
            $table->time('Time');
            $table->date('End_Date')->nullable();
            $table->boolean('Signature_Activity');
            $table->string('Project_Type');
            $table->longText('Activity_Details');
            $table->integer('Leos_Involved');
            $table->integer('People_Benefited');
            $table->float('Overall_Points_Received');
            $table->float('Total_Leo_Hours');
            $table->string('Photos');
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
        Schema::dropIfExists('spas');
    }
}
