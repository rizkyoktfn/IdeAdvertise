<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientTable', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('skill');
            $table->string('price');
            $table->integer('phone');
            $table->string('email')->unique();
            $table->string('image');

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
