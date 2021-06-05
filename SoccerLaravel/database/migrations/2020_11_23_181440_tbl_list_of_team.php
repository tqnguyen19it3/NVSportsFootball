<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblListOfTeam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_list_of_team', function (Blueprint $table) {
            $table->Increments('list_team_id');
            $table->integer('profile_team_id');
            $table->integer('user_id');
            $table->string('clb_vitri');
            $table->integer('clb_captain');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_list_of_team');
    }
}
