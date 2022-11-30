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

            // motor skills
            $table->enum('talk_living', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('identify_group', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('talk_compare', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('blend_letter', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('talk_other_living', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('arrange_object', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('identify_domestic', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('talk_sources', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('identify_beginning_sound', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('draw_four_source', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('describe_position_motion', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('identify_position_target', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('talk_presence', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('talk_types_soil', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('identify_plants', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('identify_match_farm', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('identify_talk_natural', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('identify_main_weather', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('mention_clothing', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('talk_various', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('mention_draw', ['E', 'G', 'A', 'N'])->nullable();


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