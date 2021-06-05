<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblYard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_yard', function (Blueprint $table) {
            $table->Increments('yard_id');
            $table->integer('yard_system_id');
            $table->string('yard_mss');
            $table->string('yard_surface');
            $table->string('yard_img');
            $table->string('yard_limit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_yard');
    }
}
