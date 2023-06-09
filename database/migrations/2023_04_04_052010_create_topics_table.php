<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('slug');
            $table->text("learning_title")->nullable();
            $table->text("learning_desc")->nullable();
            $table->text("learning_desc_sub")->nullable();
            $table->text("video_url")->nullable();

            $table->text("code_example")->nullable();
            $table->text("code_explanation")->nullable();
            $table->text("code_practise")->nullable();

            $table->text("code_first_line")->nullable();
            $table->text("code_second_line")->nullable();
            $table->text("code_third_line")->nullable();
            $table->text("code_fourth_line")->nullable();
            $table->text("code_fifth_line")->nullable();
            $table->text("code_six_line")->nullable();
            $table->text("code_seven_line")->nullable();
            $table->text("code_eight_line")->nullable();
            $table->text("code_nine_line")->nullable();
            $table->text("code_ten_line")->nullable();
            $table->text("code_order")->nullable();

            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('id')->on('courses');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topics');
    }
};
