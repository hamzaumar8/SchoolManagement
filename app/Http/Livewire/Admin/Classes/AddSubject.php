<?php

namespace App\Http\Livewire\Admin\Classes;

use App\Models\Classes;
use App\Models\ClassesSubject;
use App\Models\Subject;
use Exception;
use Livewire\Component;
use WireUi\Traits\Actions;

class AddSubject extends Component
{
    use Actions;
    protected $listeners = ['refreshComponent' => '$refresh'];

    public Classes $class;
    public array $checkboxes;
    public $subjects;


    public function mount(ClassesSubject $model)
    {

        // get an array of ids
        $setOfIds = $model::where('class_id', $this->class->id)->pluck('subject_id')->toArray();
        // dd($setOfIds);
        $this->checkboxes = array_fill_keys($setOfIds, true);
        $this->subjects = Subject::all();
    }


    public function addsubject()
    {

        try {

            if (!empty($this->checkboxes)) {
                foreach ($this->checkboxes as $key => $value) {
                    $subject_id = $key;
                    $subject = ClassesSubject::where('class_id', $this->class->id)->where('subject_id', $subject_id)->first();

                    if ($value) {
                        if (!$subject) {
                            ClassesSubject::create([
                                'class_id' => $this->class->id,
                                'subject_id' => $subject_id,
                            ]);
                        }
                    } else {
                        if ($subject) {
                            $subject->delete();
                        }
                    }
                }
            }

            $this->emit('refreshComponent');
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