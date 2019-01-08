<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->mediumText('content');
            $table->string('image')->nullable();
            $table->text('gallery')->nullable();
            $table->string('video_id')->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->tinyInteger('status')->default(0);

            $table->foreign('category_id')->references('id')->on('page_categories')->onUpdate('cascade')->onDelete('set null');
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
        Schema::dropIfExists('pages');
    }
}
