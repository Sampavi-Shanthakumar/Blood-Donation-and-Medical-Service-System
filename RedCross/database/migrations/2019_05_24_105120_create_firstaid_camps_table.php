<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirstaidCampsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firstaid_camps', function (Blueprint $table) {
            $table->increments('fc_id');
            $table->string('fname', 20);
            $table->string('lname', 20);
            $table->string('organization', 20);
            $table->integer('no');
            $table->string('street', 20);
            $table->string('city', 20);
            $table->string('phoneno', 10);
            $table->date('date');
            $table->string('event', 20);
            $table->string('location', 20);
            $table->string('nic', 12);
            $table->dateTime('created');
            $table->dateTime('modified');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('firstaid_camps');
    }
}
