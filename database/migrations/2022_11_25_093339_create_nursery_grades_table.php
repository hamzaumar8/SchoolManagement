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
        Schema::create('nursery_grades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grade_id')->nullable();
            $table->unsignedBigInteger('student_id')->nullable();

            // motor skills
            $table->enum('ms_can_throw', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('ms_active', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('ms_physical', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('ms_can_wear', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('ms_good_control', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('ms_consiousness', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('ms_general_health', ['E', 'G', 'A', 'N'])->nullable();

            // Emotional and social development
            $table->enum('es_cheerfulness', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('es_child_mixes', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('es_child_shows', ['E', 'G', 'A', 'N'])->nullable();

            // Cognitive and language development
            $table->enum('cl_concentrates', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('cl_can_recite', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('cl_ask_questions', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('cl_can_tell_name', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('cl_can_understand', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('cl_can_manipulate', ['E', 'G', 'A', 'N'])->nullable();

            // Music, Art, Creativity
            $table->enum('mac_sing', ['E', 'G', 'A', 'N'])->nullable();
            $table->enum('mac_dance', ['E', 'G', 'A', 'N'])->nullable();

            $table->enum('neatness', ['very neat', 'neat', 'quite neat'])->nullable();
            $table->enum('conduct', ['sociable', 'firendly', 'respectful', 'helpful', 'responsible', 'appreciative', 'cooperative'])->nullable();

            $table->enum('status', ['save', 'submit'])->default('save');

            $table->foreign('grade_id')->references('id')->on('grade_systems')->onDelete('cascade');
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
        Schema::dropIfExists('nursery_grades');
    }
};