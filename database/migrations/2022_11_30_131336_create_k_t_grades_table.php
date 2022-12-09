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
        Schema::create('k_t_grades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grade_id')->nullable();
            $table->unsignedBigInteger('student_id')->nullable();


            $table->enum('assoc_parts_body', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('compare_rel_no', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('compare_weight_obj', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('tell_size_obj', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('compare_height_obj', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('compare_len_obj', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('sort_group_color', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('join_group_obj', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('add_two_no', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('estimate_no', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('take_away_no', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('identify_desc_body', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('func_body_part', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('identify_desc_human_body', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('func_internal_body_part', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('observe_personal_hygiene', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('identify_food_groups', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('importance_eating', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('diff_clean_dirty', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('demo_keep_environ', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('equip_cleaning_environ', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('diff_harmful_non', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('practice_road_accidents', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('dist_nuclear_extended', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('roles_family', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('fest_family_together', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('practice_rule_of_school', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('draw_color_body', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('cut_paste_body', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('draw_match_sense', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('cut_paste_activity', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('mould_two_food', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('model_vaccine', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('arrange_mat_design', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('waste_paper_mosaic', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('positive_dec_self', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('diff_human_animal', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('beginning_ending_sound_body', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('approprite_word_label', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('identify_letter_sounds', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('recopy_words_approp', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('match_upper_lower_case', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('relate_action_words', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('identify_rhyming_words', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('identify_occuring_sounds', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('read_talk_pictures', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('clap_syllabus_words', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('blend_sound_form_word', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('sight_word_sentences', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('listen_retell_story', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('listen_quest_ans_orally', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('recite_rhymes_poems', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('talk_school_environ', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('identify_vowels_consonant', ['A+', 'A', 'D', 'N'])->nullable();
            $table->enum('arrange_pictures_story', ['A+', 'A', 'D', 'N'])->nullable();


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
        Schema::dropIfExists('k_t_grades');
    }
};