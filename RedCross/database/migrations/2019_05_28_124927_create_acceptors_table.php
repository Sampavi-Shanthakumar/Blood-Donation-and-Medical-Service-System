<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcceptorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acceptors', function (Blueprint $table) {
            $table->increments('acceptor_id');
            $table->string('fname', 20);
            $table->string('lname', 20);
            $table->integer('no');
            $table->string('street', 20);
            $table->string('city', 20);
            $table->string('phoneno', 10);
            $table->char('gender', 1);
            $table->string('nic', 12);
            $table->integer('user_id')->unsigned();
            $table->dateTime('created');
            $table->dateTime('modified');
            
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
        Schema::dropIfExists('acceptors');
    }
}
