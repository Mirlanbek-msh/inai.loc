<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curricula', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('semester')->default(0);
            $table->unsignedInteger('specialisation_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();
            $table->longText('comment')->nullable();
            $table->timestamps();

            $table->foreign('specialisation_id')->references('id')->on('specialisations')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('module_id')->references('id')->on('modules')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curricula');
    }
}
