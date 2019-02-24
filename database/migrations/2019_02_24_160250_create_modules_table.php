<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nr')->nullable();
            $table->string('label')->nullable();
            $table->integer('ects')->default(0);
            $table->string('professor')->nullable();
            $table->longText('content')->nullable();
            $table->longText('learning_goals')->nullable();
            $table->text('literature')->nullable();
            $table->text('preliminary_knowledge')->nullable();
            $table->text('preliminary_work')->nullable();
            $table->text('examination')->nullable();
            $table->text('exam_duration')->nullable();
            $table->longText('comment')->nullable();
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
        Schema::dropIfExists('modules');
    }
}
