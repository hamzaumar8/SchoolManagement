<?php

namespace App\Http\Livewire\Staff\Grade\Assesment;

use App\Models\KTGrade;
use Exception;
use Livewire\Component;
use WireUi\Traits\Actions;

class Kg2 extends Component
{
    use Actions;
    public KTGrade $grades;

    public $assoc_parts_body, $compare_rel_no, $compare_weight_obj, $tell_size_obj, $compare_height_obj, $compare_len_obj, $sort_group_color, $join_group_obj, $add_two_no, $estimate_no, $take_away_no, $identify_desc_body, $func_body_part, $identify_desc_human_body, $func_internal_body_part, $observe_personal_hygiene, $identify_food_groups, $importance_eating, $diff_clean_dirty, $demo_keep_environ, $equip_cleaning_environ, $diff_harmful_non, $practice_road_accidents, $dist_nuclear_extended, $roles_family, $fest_family_together, $practice_rule_of_school, $draw_color_body, $cut_paste_body, $draw_match_sense, $cut_paste_activity, $mould_two_food, $model_vaccine, $arrange_mat_design, $waste_paper_mosaic, $positive_dec_self, $diff_human_animal, $beginning_ending_sound_body, $approprite_word_label, $identify_letter_sounds, $recopy_words_approp, $match_upper_lower_case, $relate_action_words, $identify_rhyming_words, $identify_occuring_sounds, $read_talk_pictures, $clap_syllabus_words, $blend_sound_form_word, $sight_word_sentences, $listen_retell_story, $listen_quest_ans_orally, $recite_rhymes_poems, $talk_school_environ, $identify_vowels_consonant, $arrange_pictures_story, $neatness, $conduct, $status;


    public function mount()
    {
        $this->assoc_parts_body = $this->grades->assoc_parts_body;
        $this->compare_rel_no = $this->grades->compare_rel_no;
        $this->compare_weight_obj = $this->grades->compare_weight_obj;
        $this->tell_size_obj = $this->grades->tell_size_obj;
        $this->compare_height_obj = $this->grades->compare_height_obj;
        $this->compare_len_obj = $this->grades->compare_len_obj;
        $this->sort_group_color = $this->grades->sort_group_color;
        $this->join_group_obj = $this->grades->join_group_obj;
        $this->add_two_no = $this->grades->add_two_no;
        $this->estimate_no = $this->grades->estimate_no;
        $this->take_away_no = $this->grades->take_away_no;
        $this->identify_desc_body = $this->grades->identify_desc_body;
        $this->func_body_part = $this->grades->func_body_part;
        $this->identify_desc_human_body = $this->grades->identify_desc_human_body;
        $this->func_internal_body_part = $this->grades->func_internal_body_part;
        $this->observe_personal_hygiene = $this->grades->observe_personal_hygiene;
        $this->identify_food_groups = $this->grades->identify_food_groups;
        $this->importance_eating = $this->grades->importance_eating;
        $this->diff_clean_dirty = $this->grades->diff_clean_dirty;
        $this->demo_keep_environ = $this->grades->demo_keep_environ;
        $this->equip_cleaning_environ = $this->grades->equip_cleaning_environ;
        $this->diff_harmful_non = $this->grades->diff_harmful_non;
        $this->practice_road_accidents = $this->grades->practice_road_accidents;
        $this->dist_nuclear_extended = $this->grades->dist_nuclear_extended;
        $this->roles_family = $this->grades->roles_family;
        $this->fest_family_together = $this->grades->fest_family_together;
        $this->practice_rule_of_school = $this->grades->practice_rule_of_school;
        $this->draw_color_body = $this->grades->draw_color_body;
        $this->cut_paste_body = $this->grades->cut_paste_body;
        $this->draw_match_sense = $this->grades->draw_match_sense;
        $this->cut_paste_activity = $this->grades->cut_paste_activity;
        $this->mould_two_food = $this->grades->mould_two_food;
        $this->model_vaccine = $this->grades->model_vaccine;
        $this->arrange_mat_design = $this->grades->arrange_mat_design;
        $this->waste_paper_mosaic = $this->grades->waste_paper_mosaic;
        $this->positive_dec_self = $this->grades->positive_dec_self;
        $this->diff_human_animal = $this->grades->diff_human_animal;
        $this->beginning_ending_sound_body = $this->grades->beginning_ending_sound_body;
        $this->approprite_word_label = $this->grades->approprite_word_label;
        $this->identify_letter_sounds = $this->grades->identify_letter_sounds;
        $this->recopy_words_approp = $this->grades->recopy_words_approp;
        $this->match_upper_lower_case = $this->grades->match_upper_lower_case;
        $this->relate_action_words = $this->grades->relate_action_words;
        $this->identify_rhyming_words = $this->grades->identify_rhyming_words;
        $this->identify_occuring_sounds = $this->grades->identify_occuring_sounds;
        $this->read_talk_pictures = $this->grades->read_talk_pictures;
        $this->clap_syllabus_words = $this->grades->clap_syllabus_words;
        $this->blend_sound_form_word = $this->grades->blend_sound_form_word;
        $this->sight_word_sentences = $this->grades->sight_word_sentences;
        $this->listen_retell_story = $this->grades->listen_retell_story;
        $this->listen_quest_ans_orally = $this->grades->listen_quest_ans_orally;
        $this->recite_rhymes_poems = $this->grades->recite_rhymes_poems;
        $this->talk_school_environ = $this->grades->talk_school_environ;
        $this->identify_vowels_consonant = $this->grades->identify_vowels_consonant;
        $this->arrange_pictures_story = $this->grades->arrange_pictures_story;
        $this->neatness = $this->grades->neatness;
        $this->conduct = $this->grades->conduct;
    }

    protected function rules()
    {
        return [
            'assoc_parts_body' => 'required',
            'compare_rel_no' => 'required',
            'compare_weight_obj' => 'required',
            'tell_size_obj' => 'required',
            'compare_height_obj' => 'required',
            'compare_len_obj' => 'required',
            'sort_group_color' => 'required',
            'join_group_obj' => 'required',
            'add_two_no' => 'required',
            'estimate_no' => 'required',
            'take_away_no' => 'required',
            'identify_desc_body' => 'required',
            'func_body_part' => 'required',
            'identify_desc_human_body' => 'required',
            'func_internal_body_part' => 'required',
            'observe_personal_hygiene' => 'required',
            'identify_food_groups' => 'required',
            'importance_eating' => 'required',
            'diff_clean_dirty' => 'required',
            'demo_keep_environ' => 'required',
            'equip_cleaning_environ' => 'required',
            'diff_harmful_non' => 'required',
            'practice_road_accidents' => 'required',
            'dist_nuclear_extended' => 'required',
            'roles_family' => 'required',
            'fest_family_together' => 'required',
            'practice_rule_of_school' => 'required',
            'draw_color_body' => 'required',
            'cut_paste_body' => 'required',
            'draw_match_sense' => 'required',
            'cut_paste_activity' => 'required',
            'mould_two_food' => 'required',
            'model_vaccine' => 'required',
            'arrange_mat_design' => 'required',
            'waste_paper_mosaic' => 'required',
            'positive_dec_self' => 'required',
            'diff_human_animal' => 'required',
            'beginning_ending_sound_body' => 'required',
            'approprite_word_label' => 'required',
            'identify_letter_sounds' => 'required',
            'recopy_words_approp' => 'required',
            'match_upper_lower_case' => 'required',
            'relate_action_words' => 'required',
            'identify_rhyming_words' => 'required',
            'identify_occuring_sounds' => 'required',
            'read_talk_pictures' => 'required',
            'clap_syllabus_words' => 'required',
            'blend_sound_form_word' => 'required',
            'sight_word_sentences' => 'required',
            'listen_retell_story' => 'required',
            'listen_quest_ans_orally' => 'required',
            'recite_rhymes_poems' => 'required',
            'talk_school_environ' => 'required',
            'identify_vowels_consonant' => 'required',
            'arrange_pictures_story' => 'required',
            'neatness' => 'required',
            'conduct' => 'required',
            'neatness' => 'required',
            'conduct' => 'required',
        ];
    }

    public function process($status)
    {
        try {
            $this->grades->assoc_parts_body = $this->assoc_parts_body;
            $this->grades->compare_rel_no = $this->compare_rel_no;
            $this->grades->compare_weight_obj = $this->compare_weight_obj;
            $this->grades->tell_size_obj = $this->tell_size_obj;
            $this->grades->compare_height_obj = $this->compare_height_obj;
            $this->grades->compare_len_obj = $this->compare_len_obj;
            $this->grades->sort_group_color = $this->sort_group_color;
            $this->grades->join_group_obj = $this->join_group_obj;
            $this->grades->add_two_no = $this->add_two_no;
            $this->grades->estimate_no = $this->estimate_no;
            $this->grades->take_away_no = $this->take_away_no;
            $this->grades->identify_desc_body = $this->identify_desc_body;
            $this->grades->func_body_part = $this->func_body_part;
            $this->grades->identify_desc_human_body = $this->identify_desc_human_body;
            $this->grades->func_internal_body_part = $this->func_internal_body_part;
            $this->grades->observe_personal_hygiene = $this->observe_personal_hygiene;
            $this->grades->identify_food_groups = $this->identify_food_groups;
            $this->grades->importance_eating = $this->importance_eating;
            $this->grades->diff_clean_dirty = $this->diff_clean_dirty;
            $this->grades->demo_keep_environ = $this->demo_keep_environ;
            $this->grades->equip_cleaning_environ = $this->equip_cleaning_environ;
            $this->grades->diff_harmful_non = $this->diff_harmful_non;
            $this->grades->practice_road_accidents = $this->practice_road_accidents;
            $this->grades->dist_nuclear_extended = $this->dist_nuclear_extended;
            $this->grades->roles_family = $this->roles_family;
            $this->grades->fest_family_together = $this->fest_family_together;
            $this->grades->practice_rule_of_school = $this->practice_rule_of_school;
            $this->grades->draw_color_body = $this->draw_color_body;
            $this->grades->cut_paste_body = $this->cut_paste_body;
            $this->grades->draw_match_sense = $this->draw_match_sense;
            $this->grades->cut_paste_activity = $this->cut_paste_activity;
            $this->grades->mould_two_food = $this->mould_two_food;
            $this->grades->model_vaccine = $this->model_vaccine;
            $this->grades->arrange_mat_design = $this->arrange_mat_design;
            $this->grades->waste_paper_mosaic = $this->waste_paper_mosaic;
            $this->grades->positive_dec_self = $this->positive_dec_self;
            $this->grades->diff_human_animal = $this->diff_human_animal;
            $this->grades->beginning_ending_sound_body = $this->beginning_ending_sound_body;
            $this->grades->approprite_word_label = $this->approprite_word_label;
            $this->grades->identify_letter_sounds = $this->identify_letter_sounds;
            $this->grades->recopy_words_approp = $this->recopy_words_approp;
            $this->grades->match_upper_lower_case = $this->match_upper_lower_case;
            $this->grades->relate_action_words = $this->relate_action_words;
            $this->grades->identify_rhyming_words = $this->identify_rhyming_words;
            $this->grades->identify_occuring_sounds = $this->identify_occuring_sounds;
            $this->grades->read_talk_pictures = $this->read_talk_pictures;
            $this->grades->clap_syllabus_words = $this->clap_syllabus_words;
            $this->grades->blend_sound_form_word = $this->blend_sound_form_word;
            $this->grades->sight_word_sentences = $this->sight_word_sentences;
            $this->grades->listen_retell_story = $this->listen_retell_story;
            $this->grades->listen_quest_ans_orally = $this->listen_quest_ans_orally;
            $this->grades->recite_rhymes_poems = $this->recite_rhymes_poems;
            $this->grades->talk_school_environ = $this->talk_school_environ;
            $this->grades->identify_vowels_consonant = $this->identify_vowels_consonant;
            $this->grades->arrange_pictures_story = $this->arrange_pictures_story;
            $this->grades->neatness = $this->neatness;
            $this->grades->conduct = $this->conduct;
            if ($status === 'status') {
                $this->grades->status = 'submit';
            }
            $this->grades->save();
        } catch (Exception $e) {
            $message = $e->getMessage();
            $this->addError('Exception Message: ', $message);
            $this->notification()->error(
                'Error !!!',
                'Exception Message: ' . $message,
            );
        }
    }

    public function save()
    {
        $this->process('save');
        $this->notification()->success(
            'Success !!!',
            'Grade was updated succesfully',
        );
    }

    public function submit()
    {
        $this->validate();
        $this->process('submit');
        $this->notification()->success(
            'Success !!!',
            'Grade was updated succesfully',
        );
    }

    public function render()
    {
        return view('livewire.staff.grade.assesment.kg2');
    }
}