<?php

namespace App\Http\Livewire\Staff\Grade\Assesment;

use App\Models\NurseryGrade;
use Exception;
use Livewire\Component;
use WireUi\Traits\Actions;

class Nursery extends Component
{

    use Actions;
    public NurseryGrade $grades;
    public $ms_can_throw, $ms_active, $ms_physical, $ms_can_wear, $ms_good_control, $ms_consiousness, $ms_general_health, $es_cheerfulness, $es_child_mixes, $es_child_shows, $cl_concentrates, $cl_can_recite, $cl_ask_questions, $cl_can_tell_name, $cl_can_understand, $cl_can_manipulate, $mac_dance, $neatness, $conduct, $status;

    public function mount()
    {
        $this->ms_can_throw = $this->grades->ms_can_throw;
        $this->ms_active = $this->grades->ms_active;
        $this->ms_physical = $this->grades->ms_physical;
        $this->ms_can_wear = $this->grades->ms_can_wear;
        $this->ms_good_control = $this->grades->ms_good_control;
        $this->ms_consiousness = $this->grades->ms_consiousness;
        $this->ms_general_health = $this->grades->ms_general_health;
        $this->es_cheerfulness = $this->grades->es_cheerfulness;
        $this->es_child_mixes = $this->grades->es_child_mixes;
        $this->es_child_shows = $this->grades->es_child_shows;
        $this->cl_concentrates = $this->grades->cl_concentrates;
        $this->cl_can_recite = $this->grades->cl_can_recite;
        $this->cl_ask_questions = $this->grades->cl_ask_questions;
        $this->cl_can_tell_name = $this->grades->cl_can_tell_name;
        $this->cl_can_understand = $this->grades->cl_can_understand;
        $this->cl_can_manipulate = $this->grades->cl_can_manipulate;
        $this->mac_sing = $this->grades->mac_sing;
        $this->mac_dance = $this->grades->mac_dance;
        $this->neatness = $this->grades->neatness;
        $this->conduct = $this->grades->conduct;
        $this->status = $this->grades->status;
    }

    protected function rules()
    {
        return [
            'ms_can_throw' => 'required',
            'ms_active' => 'required',
            'ms_physical' => 'required',
            'ms_can_wear' => 'required',
            'ms_good_control' => 'required',
            'ms_consiousness' => 'required',
            'ms_general_health' => 'required',
            'es_cheerfulness' => 'required',
            'es_child_mixes' => 'required',
            'es_child_shows' => 'required',
            'cl_concentrates' => 'required',
            'cl_can_recite' => 'required',
            'cl_ask_questions' => 'required',
            'cl_can_tell_name' => 'required',
            'cl_can_understand' => 'required',
            'cl_can_manipulate' => 'required',
            'mac_sing' => 'required',
            'mac_dance' => 'required',
            'neatness' => 'required',
            'conduct' => 'required',
        ];
    }

    public function save()
    {
        try {
            $this->grades->ms_can_throw = $this->ms_can_throw;
            $this->grades->ms_active = $this->ms_active;
            $this->grades->ms_physical = $this->ms_physical;
            $this->grades->ms_can_wear = $this->ms_can_wear;
            $this->grades->ms_good_control = $this->ms_good_control;
            $this->grades->ms_consiousness = $this->ms_consiousness;
            $this->grades->ms_general_health = $this->ms_general_health;
            $this->grades->es_cheerfulness = $this->es_cheerfulness;
            $this->grades->es_child_mixes = $this->es_child_mixes;
            $this->grades->es_child_shows = $this->es_child_shows;
            $this->grades->cl_concentrates = $this->cl_concentrates;
            $this->grades->cl_can_recite = $this->cl_can_recite;
            $this->grades->cl_ask_questions = $this->cl_ask_questions;
            $this->grades->cl_can_tell_name = $this->cl_can_tell_name;
            $this->grades->cl_can_understand = $this->cl_can_understand;
            $this->grades->cl_can_manipulate = $this->cl_can_manipulate;
            $this->grades->mac_sing = $this->mac_sing;
            $this->grades->mac_dance = $this->mac_dance;
            $this->grades->neatness = $this->neatness;
            $this->grades->conduct = $this->conduct;
            $this->grades->save();
        } catch (Exception $e) {
            $message = $e->getMessage();
            $this->addError('Exception Message: ', $message);
            $this->notification()->error(
                'Error !!!',
                'Exception Message: ' . $message,
            );
        }

        $this->notification()->success(
            'Success !!!',
            'Grade was updated succesfully',
        );
    }
    public function submit()
    {
        $this->validate();
        try {
            $this->grades->ms_can_throw = $this->ms_can_throw;
            $this->grades->ms_active = $this->ms_active;
            $this->grades->ms_physical = $this->ms_physical;
            $this->grades->ms_can_wear = $this->ms_can_wear;
            $this->grades->ms_good_control = $this->ms_good_control;
            $this->grades->ms_consiousness = $this->ms_consiousness;
            $this->grades->ms_general_health = $this->ms_general_health;
            $this->grades->es_cheerfulness = $this->es_cheerfulness;
            $this->grades->es_child_mixes = $this->es_child_mixes;
            $this->grades->es_child_shows = $this->es_child_shows;
            $this->grades->cl_concentrates = $this->cl_concentrates;
            $this->grades->cl_can_recite = $this->cl_can_recite;
            $this->grades->cl_ask_questions = $this->cl_ask_questions;
            $this->grades->cl_can_tell_name = $this->cl_can_tell_name;
            $this->grades->cl_can_understand = $this->cl_can_understand;
            $this->grades->cl_can_manipulate = $this->cl_can_manipulate;
            $this->grades->mac_sing = $this->mac_sing;
            $this->grades->mac_dance = $this->mac_dance;
            $this->grades->neatness = $this->neatness;
            $this->grades->conduct = $this->conduct;
            $this->grades->status = 'submit';
            $this->grades->save();
        } catch (Exception $e) {
            $message = $e->getMessage();
            $this->addError('Exception Message: ', $message);
            $this->notification()->error(
                'Error !!!',
                'Exception Message: ' . $message,
            );
        }

        $this->notification()->success(
            'Success !!!',
            'Grade was updated succesfully',
        );
    }
    public function render()
    {
        return view('livewire.staff.grade.assesment.nursery');
    }
}