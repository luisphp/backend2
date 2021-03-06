<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfessionIdToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users' , function (Blueprint $table){
        $table->dropColumn('profession');
        $table->integer('fk_profession')->unisigned()->after('password');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('users' , function (Blueprint $table){
          $table->dropColumn('fk_profession');
          $table->string('profession',191)->nullable()->after('password');
        });
    }
}
