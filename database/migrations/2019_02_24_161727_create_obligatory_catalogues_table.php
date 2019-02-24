<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObligatoryCataloguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obligatory_catalogues', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('placeholder_module_id')->nullable();
            $table->unsignedInteger('obligatory_module_id')->nullable();
            $table->longText('comment')->nullable();
            $table->timestamps();

            // $table->foreign('programm_id')->references('id')->on('programms')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obligatory_catalogues');
    }
}
