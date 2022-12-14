<?php

namespace App\Http\Livewire\Staff\Report\Show;

use App\Models\GradeSystem;
use App\Models\KGrade;
use Livewire\Component;

class Kg extends Component
{
    public $report;

    public $talk_living, $identify_group, $talk_compare, $blend_letter, $talk_other_living, $arrange_object, $identify_domestic, $talk_sources, $identify_beginning_sound, $draw_four_source, $describe_position_motion, $identify_position_target, $talk_presence, $talk_types_soil, $identify_plants, $identify_match_farm, $identify_talk_natural, $identify_main_weather, $mention_clothing, $talk_various, $mention_draw, $neatness, $conduct, $status;

    public function mount()
    {
        $student = $this->report->student;
        $subject = $this->report->class->subjects[0];
        $class = $this->report->class;
        $term = $this->report->term;
        $gs = GradeSystem::where('term_id', $term->id)->where('class_id', $class->id)->where('subject_id', $subject->id)->orderBy('id', 'DESC')->first();
        if ($gs) {
            $grades = KGrade::where('grade_id', $gs->id)->where('student_id', $student->id)->orderBy('id', 'DESC')->first();
            $this->talk_living = $grades->talk_living;
            $this->identify_group = $grades->identify_group;
            $this->talk_compare = $grades->talk_compare;
            $this->blend_letter = $grades->blend_letter;
            $this->talk_other_living = $grades->talk_other_living;
            $this->arrange_object = $grades->arrange_object;
            $this->identify_domestic = $grades->identify_domestic;
            $this->talk_sources = $grades->talk_sources;
            $this->identify_beginning_sound = $grades->identify_beginning_sound;
            $this->draw_four_source = $grades->draw_four_source;
            $this->describe_position_motion = $grades->describe_position_motion;
            $this->identify_position_target = $grades->identify_position_target;
            $this->talk_presence = $grades->talk_presence;
            $this->talk_types_soil = $grades->talk_types_soil;
            $this->identify_plants = $grades->identify_plants;
            $this->identify_match_farm = $grades->identify_match_farm;
            $this->identify_talk_natural = $grades->identify_talk_natural;
            $this->identify_main_weather = $grades->identify_main_weather;
            $this->mention_clothing = $grades->mention_clothing;
            $this->talk_various = $grades->talk_various;
            $this->mention_draw = $grades->mention_draw;
            $this->neatness = $grades->neatness;
            $this->conduct = $grades->conduct;
        }
    }
    public function render()
    {
        return view('livewire.staff.report.show.kg');
    }
}