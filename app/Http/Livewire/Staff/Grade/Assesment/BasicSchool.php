<?php

namespace App\Http\Livewire\Staff\Grade\Assesment;

use APP\Helpers\Helper;
use App\Models\Grade;
use Exception;
use Livewire\Component;
use WireUi\Traits\Actions;

class BasicSchool extends Component
{
    use Actions;
    public $gradesystem;
    public $grades;

    public array $checkboxes;

    protected $rules = [
        'grades.*.cat1' => 'required|numeric|between:0,20',
        'grades.*.gw' => 'required|numeric|between:0,10',
        'grades.*.cat2' => 'required|numeric|between:0,20',
        'grades.*.exam' => 'required|numeric|between:0,100',
    ];

    public function mount()
    {
        $this->grades = $this->gradesystem->grades;
    }

    public function save()
    {

        $this->validate();
        try {
            foreach ($this->grades as $grade) {
                $cat =  ($grade->cat1 + $grade->gw + $grade->cat2);
                $grade->final_exam = ($grade->exam / 2);
                $grade->total = ($grade->final_exam + $cat);
                $grade->grade = Helper::grade_no($grade->total);
                $grade->save();
            }
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
        // dd($this->gradesystem);
        return view('livewire.staff.grade.assesment.basic-school');
    }
}