<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('k_grades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grade_id')->nullable();
            $table->unsignedBigInteger('student_id')->nullable();


            $table->enum('talk_living', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('identify_group', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('talk_compare', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('blend_letter', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('talk_other_living', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('arrange_object', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('identify_domestic', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('talk_sources', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('identify_beginning_sound', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('draw_four_source', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('describe_position_motion', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('identify_position_target', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('talk_presence', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('talk_types_soil', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('identify_plants', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('identify_match_farm', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('identify_talk_natural', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('identify_main_weather', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('mention_clothing', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('talk_various', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('mention_draw', ['A+', 'A', 'D', 'N'])->nullable();


            $table->enum('neatness', ['very neat', 'neat', 'quite neat'])->nullable();
            $table->enum('conduct', ['sociable', 'firendly', 'respectful', 'helpful', 'responsible', 'appreciative', 'cooperative'])->nullable();

            $table->enum('status', ['save', 'submit'])->default('save');

            $table->foreign('grade_id')->references('id')->on('grade_systems')->onDelete('set null');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('set null');

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
        Schema::dropIfExists('k_grades');
    }
};