<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_replies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('org_name')->nullable();
            $table->string('full_name')->nullable();
            $table->string('university')->nullable();
            $table->string('group_course')->nullable();
            $table->string('team_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('file')->nullable();
            $table->tinyInteger('seen')->default(0);
            $table->unsignedInteger('event_id')->nullable();

            $table->foreign('event_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('event_replies');
    }
}
