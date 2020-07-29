<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LeoClubs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leo_clubs', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumInteger('Leo_Club_ID')->nullable();
            $table->string('Leo_Club_Name');
            $table->string('Sponsor_Lions_Club_Name');
            $table->mediumInteger('Club_ID')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leo_clubs');
    }
}
