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
            $table->string('title');
            $table->string('slug');
            $table->string('lang')->default('ru');
            $table->text('description')->nullable();
            $table->text('content');
            $table->string('thumb')->nullable();
            $table->string('image')->nullable();

            /**About event */
            $table->text('time_place_desc')->nullable();
            $table->dateTime('event_date')->nullable();
            $table->string('event_place')->nullable();
            $table->string('event_entrance')->nullable();
            $table->string('video_id')->nullable();

            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('to_banner')->default(0);
            $table->integer('views')->default(0);

            /** Author */
            $table->string('author_name')->nullable();
            $table->string('author_phone')->nullable();
            $table->string('author_email')->nullable();
            $table->string('author_desc')->nullable();
            $table->string('author_img')->nullable();
            
            /**Siging up */
            $table->text('siging_up_desc')->nullable();
            $table->tinyInteger('need_org_name')->default(1);
            $table->tinyInteger('need_full_name')->default(1);
            $table->tinyInteger('need_phone')->default(1);
            $table->tinyInteger('need_email')->default(1);
            $table->tinyInteger('need_file')->default(0);


            $table->foreign('category_id')->references('id')->on('event_categories')->onUpdate('cascade')->onDelete('set null');
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
