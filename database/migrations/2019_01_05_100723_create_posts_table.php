<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('lang')->default('ru');
            $table->text('description')->nullable();
            $table->text('content');
            $table->string('thumb')->nullable();
            $table->string('image')->nullable();
            $table->text('gallery')->nullable();
            $table->string('video_id')->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('to_banner')->default(0);
            $table->integer('views')->default(0);
            $table->string('author')->nullable();

            $table->foreign('category_id')->references('id')->on('post_categories')->onUpdate('cascade')->onDelete('set null');
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
        Schema::dropIfExists('posts');
    }
}
