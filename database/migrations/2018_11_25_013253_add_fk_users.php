<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users' , function (Blueprint $table){
        $table->foreign('fk_profession')->references('id')->on('profession')->unsigned()->index();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('users' , function (Blueprint $table){
        $table->dropforeign(['fk_profession']);
        $table->dropColumn('fk_profession');
      });
    }
}
