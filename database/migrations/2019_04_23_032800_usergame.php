<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usergame extends Migration
{
    /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('usergame', function (Blueprint $table) {
        $table->increments('id');
        $table->string('typeGamer');
        $table->string('teamname')->nullable();
        $table->integer('userID')->unsigned();
        $table->integer('gameID')->unsigned();
        $table->foreign('userID')->references('id')->on('users');
        $table->foreign('gameID')->references('id')->on('games');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('usergame', function (Blueprint $table) {
        $table->dropForeign(['gameID']);
        $table->dropForeign(['userID']);
    });
     Schema::drop('usergame');
     
  }
}
