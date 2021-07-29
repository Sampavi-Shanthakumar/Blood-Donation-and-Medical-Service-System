<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatDonatedDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donated_details', function (Blueprint $table) {
            $table->increments('dd_id');
            $table->string('location', 50);
            $table->date('donateDate');
            $table->integer('donor_id')->unsigned();
            $table->dateTime('created');
            $table->dateTime('modified');

            $table->foreign('donor_id')
            ->references('donor_id')
            ->on('donors')
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
        Schema::drop('donated_details');
    }
}
