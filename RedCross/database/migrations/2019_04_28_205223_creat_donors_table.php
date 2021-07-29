<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->increments('donor_id');
            $table->string('fname', 20);
            $table->string('lname', 20);
            $table->integer('no');
            $table->string('street', 20);
            $table->string('city', 20);
            $table->string('phoneno', 10);
            $table->char('gender', 1);
            $table->date('dobDate');
            $table->integer('age');
            $table->string('nic', 12);
            $table->integer('bg_id')->unsigned();
            $table->char('availability', 1);
            $table->integer('user_id')->unsigned();
            $table->dateTime('created');
            $table->dateTime('modified');
           

            $table->foreign('bg_id')
            ->references('bg_id')
            ->on('blood_group')
            ->onDelete('cascade');

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('donors');
    }
}


