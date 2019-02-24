<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialisations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label')->nullable();
            $table->unsignedInteger('programm_id')->nullable();
            $table->timestamps();
            
            $table->foreign('programm_id')->references('id')->on('programms')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specialisations');
    }
}
