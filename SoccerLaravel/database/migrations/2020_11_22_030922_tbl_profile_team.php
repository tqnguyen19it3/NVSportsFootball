<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblProfileTeam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_profile_team', function (Blueprint $table) {
            $table->Increments('profile_team_id');
            $table->integer('user_id');
            $table->string('profile_team_name');
            $table->string('profile_team_level');
            $table->string('profile_team_vt');
            $table->string('profile_team_desc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_profile_team');
    }
}
