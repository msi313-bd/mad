<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionPapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_papers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('exam_id');
            $table->unsignedBigInteger('class_id');
            $table->string('subject_code', 4);
            $table->unsignedSmallInteger('time_in_minute')->default(180);
            $table->unsignedFloat('mark')->default(100);
            $table->unsignedTinyInteger('language_type')->default(1)->comment('1 = Bangla, 2 = Arabic, 3 = English');
            $table->string('top_text')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['exam_id', 'class_id', 'subject_code']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_papers');
    }
}
