<?php

namespace App\Http\Livewire\Staff\Grade\Assesment;

use App\Models\KGrade;
use Exception;
use Livewire\Component;
use WireUi\Traits\Actions;

class Kg extends Component
{
    use Actions;
    public KGrade $grades;

    public $talk_living, $identify_group, $talk_compare, $blend_letter, $talk_other_living, $arrange_object, $identify_domestic, $talk_sources, $identify_beginning_sound, $draw_four_source, $describe_position_motion, $identify_position_target, $talk_presence, $talk_types_soil, $identify_plants, $identify_match_farm, $identify_talk_natural, $identify_main_weather, $mention_clothing, $talk_various, $mention_draw, $neatness, $conduct, $status;


    public function mount()
    {
        $this->talk_living = $this->grades->talk_living;
        $this->identify_group = $this->grades->identify_group;
        $this->talk_compare = $this->grades->talk_compare;
        $this->blend_letter = $this->grades->blend_letter;
        $this->talk_other_living = $this->grades->talk_other_living;
        $this->arrange_object = $this->grades->arrange_object;
        $this->identify_domestic = $this->grades->identify_domestic;
        $this->talk_sources = $this->grades->talk_sources;
        $this->identify_beginning_sound = $this->grades->identify_beginning_sound;
        $this->draw_four_source = $this->grades->draw_four_source;
        $this->describe_position_motion = $this->grades->describe_position_motion;
        $this->identify_position_target = $this->grades->identify_position_target;
        $this->talk_presence = $this->grades->talk_presence;
        $this->talk_types_soil = $this->grades->talk_types_soil;
        $this->identify_plants = $this->grades->identify_plants;
        $this->identify_match_farm = $this->grades->identify_match_farm;
        $this->identify_talk_natural = $this->grades->identify_talk_natural;
        $this->identify_main_weather = $this->grades->identify_main_weather;
        $this->mention_clothing = $this->grades->mention_clothing;
        $this->talk_various = $this->grades->talk_various;
        $this->mention_draw = $this->grades->mention_draw;
        $this->neatness = $this->grades->neatness;
        $this->conduct = $this->grades->conduct;
    }

    protected function rules()
    {
        return [
            'talk_living' => 'required',
            'identify_group' => 'required',
            'talk_compare' => 'required',
            'blend_letter' => 'required',
            'talk_other_living' => 'required',
            'arrange_object' => 'required',
            'identify_domestic' => 'required',
            'talk_sources' => 'required',
            'identify_beginning_sound' => 'required',
            'draw_four_source' => 'required',
            'describe_position_motion' => 'required',
            'identify_position_target' => 'required',
            'talk_presence' => 'required',
            'talk_types_soil' => 'required',
            'identify_plants' => 'required',
            'identify_match_farm' => 'required',
            'identify_talk_natural' => 'required',
            'identify_main_weather' => 'required',
            'mention_clothing' => 'required',
            'talk_various' => 'required',
            'mention_draw' => 'required',
            'neatness' => 'required',
            'conduct' => 'required',
        ];
    }


    public function process($status)
    {
        try {
            $this->grades->ms_can_throw = $this->ms_can_throw;
            $this->grades->talk_living = $this->talk_living;
            $this->grades->identify_group = $this->identify_group;
            $this->grades->talk_compare = $this->talk_compare;
            $this->grades->blend_letter = $this->blend_letter;
            $this->grades->talk_other_living = $this->talk_other_living;
            $this->grades->arrange_object = $this->arrange_object;
            $this->grades->identify_domestic = $this->identify_domestic;
            $this->grades->talk_sources = $this->talk_sources;
            $this->grades->identify_beginning_sound = $this->identify_beginning_sound;
            $this->grades->draw_four_source = $this->draw_four_source;
            $this->grades->describe_position_motion = $this->describe_position_motion;
            $this->grades->identify_position_target = $this->identify_position_target;
            $this->grades->talk_presence = $this->talk_presence;
            $this->grades->talk_types_soil = $this->talk_types_soil;
            $this->grades->identify_plants = $this->identify_plants;
            $this->grades->identify_match_farm = $this->identify_match_farm;
            $this->grades->identify_talk_natural = $this->identify_talk_natural;
            $this->grades->identify_main_weather = $this->identify_main_weather;
            $this->grades->mention_clothing = $this->mention_clothing;
            $this->grades->talk_various = $this->talk_various;
            $this->grades->mention_draw = $this->mention_draw;
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
        return view('livewire.staff.grade.assesment.kg');
    }
}