<?php

namespace App\Http\Livewire\Staff\Report\Show;

use App\Models\GradeSystem;
use App\Models\KTGrade;
use Livewire\Component;

class Kg2 extends Component
{
    public $report;

    public $assoc_parts_body, $compare_rel_no, $compare_weight_obj, $tell_size_obj, $compare_height_obj, $compare_len_obj, $sort_group_color, $join_group_obj, $add_two_no, $estimate_no, $take_away_no, $identify_desc_body, $func_body_part, $identify_desc_human_body, $func_internal_body_part, $observe_personal_hygiene, $identify_food_groups, $importance_eating, $diff_clean_dirty, $demo_keep_environ, $equip_cleaning_environ, $diff_harmful_non, $practice_road_accidents, $dist_nuclear_extended, $roles_family, $fest_family_together, $practice_rule_of_school, $draw_color_body, $cut_paste_body, $draw_match_sense, $cut_paste_activity, $mould_two_food, $model_vaccine, $arrange_mat_design, $waste_paper_mosaic, $positive_dec_self, $diff_human_animal, $beginning_ending_sound_body, $approprite_word_label, $identify_letter_sounds, $recopy_words_approp, $match_upper_lower_case, $relate_action_words, $identify_rhyming_words, $identify_occuring_sounds, $read_talk_pictures, $clap_syllabus_words, $blend_sound_form_word, $sight_word_sentences, $listen_retell_story, $listen_quest_ans_orally, $recite_rhymes_poems, $talk_school_environ, $identify_vowels_consonant, $arrange_pictures_story, $neatness, $conduct, $status;

    public function mount()
    {
        $student = $this->report->student;
        $subject = $this->report->class->subjects[0];
        $class = $this->report->class;
        $term = $this->report->term;
        $gs = GradeSystem::where('term_id', $term->id)->where('class_id', $class->id)->where('subject_id', $subject->id)->orderBy('id', 'DESC')->first();
        if ($gs) {
            $grades = KTGrade::where('grade_id', $gs->id)->where('student_id', $student->id)->orderBy('id', 'DESC')->first();
            $this->assoc_parts_body = $grades->assoc_parts_body;
            $this->compare_rel_no = $grades->compare_rel_no;
            $this->compare_weight_obj = $grades->compare_weight_obj;
            $this->tell_size_obj = $grades->tell_size_obj;
            $this->compare_height_obj = $grades->compare_height_obj;
            $this->compare_len_obj = $grades->compare_len_obj;
            $this->sort_group_color = $grades->sort_group_color;
            $this->join_group_obj = $grades->join_group_obj;
            $this->add_two_no = $grades->add_two_no;
            $this->estimate_no = $grades->estimate_no;
            $this->take_away_no = $grades->take_away_no;
            $this->identify_desc_body = $grades->identify_desc_body;
            $this->func_body_part = $grades->func_body_part;
            $this->identify_desc_human_body = $grades->identify_desc_human_body;
            $this->func_internal_body_part = $grades->func_internal_body_part;
            $this->observe_personal_hygiene = $grades->observe_personal_hygiene;
            $this->identify_food_groups = $grades->identify_food_groups;
            $this->importance_eating = $grades->importance_eating;
            $this->diff_clean_dirty = $grades->diff_clean_dirty;
            $this->demo_keep_environ = $grades->demo_keep_environ;
            $this->equip_cleaning_environ = $grades->equip_cleaning_environ;
            $this->diff_harmful_non = $grades->diff_harmful_non;
            $this->practice_road_accidents = $grades->practice_road_accidents;
            $this->dist_nuclear_extended = $grades->dist_nuclear_extended;
            $this->roles_family = $grades->roles_family;
            $this->fest_family_together = $grades->fest_family_together;
            $this->practice_rule_of_school = $grades->practice_rule_of_school;
            $this->draw_color_body = $grades->draw_color_body;
            $this->cut_paste_body = $grades->cut_paste_body;
            $this->draw_match_sense = $grades->draw_match_sense;
            $this->cut_paste_activity = $grades->cut_paste_activity;
            $this->mould_two_food = $grades->mould_two_food;
            $this->model_vaccine = $grades->model_vaccine;
            $this->arrange_mat_design = $grades->arrange_mat_design;
            $this->waste_paper_mosaic = $grades->waste_paper_mosaic;
            $this->positive_dec_self = $grades->positive_dec_self;
            $this->diff_human_animal = $grades->diff_human_animal;
            $this->beginning_ending_sound_body = $grades->beginning_ending_sound_body;
            $this->approprite_word_label = $grades->approprite_word_label;
            $this->identify_letter_sounds = $grades->identify_letter_sounds;
            $this->recopy_words_approp = $grades->recopy_words_approp;
            $this->match_upper_lower_case = $grades->match_upper_lower_case;
            $this->relate_action_words = $grades->relate_action_words;
            $this->identify_rhyming_words = $grades->identify_rhyming_words;
            $this->identify_occuring_sounds = $grades->identify_occuring_sounds;
            $this->read_talk_pictures = $grades->read_talk_pictures;
            $this->clap_syllabus_words = $grades->clap_syllabus_words;
            $this->blend_sound_form_word = $grades->blend_sound_form_word;
            $this->sight_word_sentences = $grades->sight_word_sentences;
            $this->listen_retell_story = $grades->listen_retell_story;
            $this->listen_quest_ans_orally = $grades->listen_quest_ans_orally;
            $this->recite_rhymes_poems = $grades->recite_rhymes_poems;
            $this->talk_school_environ = $grades->talk_school_environ;
            $this->identify_vowels_consonant = $grades->identify_vowels_consonant;
            $this->arrange_pictures_story = $grades->arrange_pictures_story;
            $this->neatness = $grades->neatness;
            $this->conduct = $grades->conduct;
        }
    }
    public function render()
    {
        return view('livewire.staff.report.show.kg2');
    }
}