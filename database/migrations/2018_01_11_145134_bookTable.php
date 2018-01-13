<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BookedTabs', function(Blueprint $table)
        {

            $table->integer('id_user');
            $table->foreign('id_user')->reference('id')->on('users');



            $table->integer('id_talent');
            $table->foreign('id_talent')->reference('id')->on('clienttable');

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
    }
}
