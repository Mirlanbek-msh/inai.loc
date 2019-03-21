<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRussianToModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2')->table('module', function (Blueprint $table) {
            $table->string('nr_ru')->nullable();
            $table->string('label_ru')->nullable();
            $table->string('professor_ru')->nullable();
            $table->longText('content_ru')->nullable();
            $table->longText('learning_goals_ru')->nullable();
            $table->text('literature_ru')->nullable();
            $table->text('preliminary_knowledge_ru')->nullable();
            $table->text('preliminary_work_ru')->nullable();
            $table->text('examination_ru')->nullable();
            $table->text('exam_duration_ru')->nullable();
            $table->longText('comment_ru')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->table('module', function (Blueprint $table) {
            $table->dropColumn('label_ru');
            $table->dropColumn('professor_ru');
            $table->dropColumn('content_ru');
            $table->dropColumn('learning_goals_ru');
            $table->dropColumn('literature_ru');
            $table->dropColumn('preliminary_knowledge_ru');
            $table->dropColumn('preliminary_work_ru');
            $table->dropColumn('examination_ru');
            $table->dropColumn('exam_duration_ru');
            $table->dropColumn('comment_ru');
        });
    }
}
