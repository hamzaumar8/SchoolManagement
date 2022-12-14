<?php

namespace App\Http\Livewire\Staff\Report\Show;

use App\Models\GradeSystem;
use App\Models\NurseryGrade;
use App\Models\TerminalReport;
use Livewire\Component;

class Nursery extends Component
{
    public $report;

    public $ms_can_throw, $ms_active, $ms_physical, $ms_can_wear, $ms_good_control, $ms_consiousness, $ms_general_health, $es_cheerfulness, $es_child_mixes, $es_child_shows, $cl_concentrates, $cl_can_recite, $cl_ask_questions, $cl_can_tell_name, $cl_can_understand, $cl_can_manipulate, $mac_dance, $neatness, $conduct, $status;

    public function mount()
    {
        $student = $this->report->student;
        $subject = $this->report->class->subjects[0];
        $class = $this->report->class;
        $term = $this->report->term;
        $gs = GradeSystem::where('term_id', $term->id)->where('class_id', $class->id)->where('subject_id', $subject->id)->orderBy('id', 'DESC')->first();
        if ($gs) {
            $grades = NurseryGrade::where('grade_id', $gs->id)->where('student_id', $student->id)->orderBy('id', 'DESC')->first();
            $this->ms_can_throw = $grades->ms_can_throw;
            $this->ms_active = $grades->ms_active;
            $this->ms_physical = $grades->ms_physical;
            $this->ms_can_wear = $grades->ms_can_wear;
            $this->ms_good_control = $grades->ms_good_control;
            $this->ms_consiousness = $grades->ms_consiousness;
            $this->ms_general_health = $grades->ms_general_health;
            $this->es_cheerfulness = $grades->es_cheerfulness;
            $this->es_child_mixes = $grades->es_child_mixes;
            $this->es_child_shows = $grades->es_child_shows;
            $this->cl_concentrates = $grades->cl_concentrates;
            $this->cl_can_recite = $grades->cl_can_recite;
            $this->cl_ask_questions = $grades->cl_ask_questions;
            $this->cl_can_tell_name = $grades->cl_can_tell_name;
            $this->cl_can_understand = $grades->cl_can_understand;
            $this->cl_can_manipulate = $grades->cl_can_manipulate;
            $this->mac_sing = $grades->mac_sing;
            $this->mac_dance = $grades->mac_dance;
            $this->neatness = $grades->neatness;
            $this->conduct = $grades->conduct;
            $this->status = $grades->status;
        }
    }

    public function render()
    {
        return view('livewire.staff.report.show.nursery');
    }
}