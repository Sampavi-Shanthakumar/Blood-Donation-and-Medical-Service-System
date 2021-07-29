<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('type');
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
            $table->boolean('is_super')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
