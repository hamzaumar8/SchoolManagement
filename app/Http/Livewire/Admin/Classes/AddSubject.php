<?php

namespace App\Http\Livewire\Admin\Classes;

use App\Models\Classes;
use App\Models\ClassesSubject;
use App\Models\Grade;
use App\Models\GradeSystem;
use App\Models\KGrade;
use App\Models\KTGrade;
use App\Models\NurseryGrade;
use App\Models\Staff;
use App\Models\Subject;
use App\Models\Term;
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
            $term = session()->get('CurrTerm') ? session()->get('CurrTerm') : null;
            $CurrTerm = $term ? Term::find($term->id) : null;

            $contact = $this->classsubjects[$index];
            $this->classsubjects->forget($index);

            $gs = GradeSystem::where('subject_id', $contact->subject_id)->where('term_id', $CurrTerm->id)->where('staff_id', $contact->staff_id)->where('class_id', $contact->class_id)->first();
            if ($gs) {
                $gs->delete();
            }
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

                $term = session()->get('CurrTerm') ? session()->get('CurrTerm') : null;
                $gs = GradeSystem::where('subject_id', $class_subjects->subject_id)->where('term_id', $term
                    ->id)->where('class_id', $class_subjects->class_id)->first();
                if ($gs) {
                    $gs->update(['staff_id' => $class_subjects->staff_id]);
                }
                if (!$gs) {
                    $gs = GradeSystem::create([
                        'subject_id' => $class_subjects->subject_id,
                        'term_id' => $term->id,
                        'staff_id' => $class_subjects->staff_id,
                        'class_id' => $class_subjects->class_id,
                    ]);
                }

                if ($gs) {
                    foreach ($class_subjects->class->students as  $student) {
                        // 
                        if ($class_subjects->class->class_type == 'basic school' || $class_subjects->class->class_type == 'junior high') {
                            $check = Grade::where('grade_id', $gs->id)->where('student_id', $student->id)->first();
                            if (!$check) {
                                Grade::create([
                                    'grade_id' => $gs->id,
                                    'student_id' => $student->id,
                                ]);
                            }
                        } elseif ($class_subjects->class->class_type == 'nursery') {
                            dd('hamza');
                            // 
                            $check = NurseryGrade::where('grade_id', $gs->id)->where('student_id', $student->id)->first();
                            if (!$check) {
                                NurseryGrade::create([
                                    'grade_id' => $gs->id,
                                    'student_id' => $student->id,
                                ]);
                            }
                        } elseif ($class_subjects->class->class_type == 'kg') {
                            // 
                            $clsCheck = Classes::where('name', 'like', '%kindergarten two%')->orWhere('name', 'like', '%kindergarten 2%')->first();
                            if ($clsCheck->name === $class_subjects->class->name) {
                                $check = KTGrade::where('grade_id', $gs->id)->where('student_id', $student->id)->first();
                                if (!$check) {
                                    KTGrade::create([
                                        'grade_id' => $gs->id,
                                        'student_id' => $student->id,
                                    ]);
                                }
                            } else {
                                $check = KGrade::where('grade_id', $gs->id)->where('student_id', $student->id)->first();
                                if (!$check) {
                                    KGrade::create([
                                        'grade_id' => $gs->id,
                                        'student_id' => $student->id,
                                    ]);
                                }
                            }
                        }
                    }
                }
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