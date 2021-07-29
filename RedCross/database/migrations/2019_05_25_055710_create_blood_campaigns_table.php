<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloodCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_campaigns', function (Blueprint $table) {
            $table->increments('bc_id');
            $table->string('location', 50);
            $table->date('event_date');
            $table->string('hospital', 30);
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
        Schema::drop('blood_campaigns');
    }
}
