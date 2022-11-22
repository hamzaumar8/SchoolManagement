<?php

namespace App\Http\Livewire\Admin\Classes;

use App\Models\Classes;
use App\Models\ClassesSubject;
use App\Models\Staff;
use App\Models\Subject;
use Exception;
use Livewire\Component;
use WireUi\Traits\Actions;

class AddSubject extends Component
{
    use Actions;

    public Classes $class;
    public $subjects;
    public $staffs;
    public $subject_id;
    public $staff_id;
    public $classsubjects;

    protected $rules = [
        'classsubjects.*.staff_id' => 'required',
        'classsubjects.*.subject_id' => 'required',
    ];

    public function mount(ClassesSubject $model)
    {
        $this->classsubjects = $model::where('class_id', $this->class->id)->get();
        $this->subjects = Subject::all();
        $this->staffs = Staff::all();
    }

    public function add()
    {
        $cls = ClassesSubject::create([
            'class_id' => $this->class->id,
        ]);
        $this->classsubjects->push($cls);
    }

    public function delete($index)
    {
        try {
            $contact = $this->classsubjects[$index];
            $this->classsubjects->forget($index);
            $contact->delete();
        } catch (Exception $e) {
            $message = $e->getMessage();
            $this->addError('Exception Message: ', $message);
            $this->notification()->error(
                'Error !!!',
                'Exception Message: ' . $message,
            );
        }
    }

    public function addsubject()
    {
        $this->validate();
        try {

            foreach ($this->classsubjects as $class_subjects) {
                $class_subjects->save();
            }

            $this->notification()->success(
                'Success !!!',
                'Subject has been added successfully! ',
            );
        } catch (Exception $e) {
            $message = $e->getMessage();
            $this->addError('Exception Message: ', $message);
            $this->notification()->error(
                'Error !!!',
                'Exception Message: ' . $message,
            );
        }
    }

    public function render()
    {
        return view('livewire.admin.classes.add-subject');
    }
}