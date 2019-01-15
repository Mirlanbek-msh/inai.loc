<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->mediumText('content');
            $table->string('thumb')->nullable();
            $table->string('image')->nullable();

            /**About event */
            $table->tinyInteger('has_end_date')->default(0);
            $table->string('event_date')->nullable();
            $table->text('event_place')->nullable();
            $table->string('event_entrance')->nullable();
            $table->string('video_id')->nullable();

            $table->integer('user_id')->unsigned()->nullable();
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('to_banner')->default(0);
            $table->timestamp('deadline_date')->nullable();
            $table->integer('views')->default(0);


            /** Author */
            $table->text('author_name')->nullable();
            $table->string('author_phone')->nullable();
            $table->string('author_email')->nullable();
            $table->text('author_desc')->nullable();
            $table->string('author_img')->nullable();
            
            /**Siging up */
            $table->tinyInteger('has_signing_up_form')->default(0);
            $table->tinyInteger('need_org_name')->default(0);
            $table->tinyInteger('need_full_name')->default(0);
            $table->tinyInteger('need_phone')->default(0);
            $table->tinyInteger('need_email')->default(0);
            $table->tinyInteger('need_file')->default(0);


            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
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
        Schema::dropIfExists('events');
    }
}
