<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblYardSystem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_yard_system', function (Blueprint $table) {
            $table->Increments('yard_system_id');
            $table->integer('admin_id');
            $table->string('yard_system_name');
            $table->string('yard_system_desc');
            $table->string('yard_system_img');
            $table->string('yard_system_utilities');
            $table->string('yard_system_address');
            $table->string('yard_system_maps');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_yard_system');
    }
}
