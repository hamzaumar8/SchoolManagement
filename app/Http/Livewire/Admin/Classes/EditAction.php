<?php

namespace App\Http\Livewire\Admin\Classes;

use App\Models\Classes;
use App\Models\ClassesSubject;
use App\Models\ClassName;
use App\Models\GradeSystem;
use App\Models\KGrade;
use App\Models\KTGrade;
use App\Models\NurseryGrade;
use App\Models\Subject;
use App\Models\Term;
use Exception;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class EditAction extends ModalComponent
{
    use Actions;

    public $classId;
    public $name, $house_name, $class_type, $campus, $staff_name;


    public static function modalMaxWidth(): string
    {
        return 'md';
    }

    public static function closeModalOnEscape(): bool
    {
        return false;
    }

    public static function closeModalOnClickAway(): bool
    {
        return false;
    }

    public function cancel()
    {
        $this->closeModal();
    }

    protected function rules()
    {
        return [
            'name' => 'required|exists:class_names,id',
            'house_name' => 'required|string|max:255',
            'class_type' => 'required|string|max:255',
            'campus' => 'required|string|max:255',
            'staff_name' => 'required|exists:staff,id',
        ];
    }


    public function editClass()
    {
        $this->validate();
        try {
            $term = Term::orderBy('id', 'DESC')->first();
            if ($this->classId) {
                $class = ClassName::find($this->name);
                $classes = Classes::find($this->classId);
                $classes->classname_id = $this->name;
                $classes->name = $class->name;
                $classes->house_name = $this->house_name;
                $classes->class_type = $this->class_type;
                $classes->campus = $this->campus;
                $classes->staff_id = $this->staff_name;
                $classes->save();

                if ($this->class_type == 'creche' || $this->class_type == 'nursery' || $this->class_type == 'kg') {
                    $subject = Subject::where('name', 'LIKE', '%all%')->orWhere('name', 'LIKE', '%all subjects%')->orWhere('name', 'LIKE', '%all subject%')->first();
                    if ($subject) {
                        $clsSub = ClassesSubject::where('class_id', $classes->id)->where('subject_id', $subject->id)->first();
                        if (!$clsSub) {
                            $clsSub = ClassesSubject::create(['class_id' => $classes->id, 'subject_id' => $subject->id,]);
                        } else {
                            $clsSub->update(['staff_id' => $this->staff_name]);
                        }

                        $gs = GradeSystem::where('subject_id', $clsSub->subject_id)->where('term_id', $term->id)->where('class_id', $clsSub->class_id)->first();
                        if (!$gs) {
                            $gs = GradeSystem::create(['subject_id' => $clsSub->subject_id, 'term_id' => $term->id, 'class_id' => $clsSub->class_id]);
                        }

                        if ($gs) {
                            $gs->update(['staff_id' => $clsSub->staff_id]);
                        }

                        if ($gs) {
                            foreach ($clsSub->class->students as  $student) {
                                // 
                                if ($clsSub->class->class_type == 'nursery') {

                                    $ng = NurseryGrade::where('grade_id', $gs->id)->where('student_id', $student->id)->first();
                                    if (!$ng) {
                                        NurseryGrade::create(['grade_id' => $gs->id, 'student_id' => $student->id]);
                                    }
                                } elseif ($clsSub->class->class_type == 'kg') {
                                    // 
                                    $clsCheck = Classes::where('name', 'like', '%kindergarten two%')->orWhere('name', 'like', '%kindergarten 2%')->first();
                                    if ($clsCheck->name === $clsSub->class->name) {
                                        $ktg = KTGrade::where('grade_id', $gs->id)->where('student_id', $student->id)->first();
                                        if (!$ktg) {
                                            KTGrade::create(['grade_id' => $gs->id, 'student_id' => $student->id]);
                                        }
                                    } else {
                                        $kg = KGrade::where('grade_id', $gs->id)->where('student_id', $student->id)->first();
                                        if (!$kg) {
                                            KGrade::create(['grade_id' => $gs->id, 'student_id' => $student->id]);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        } catch (Exception $e) {
            $message = $e->getMessage();
            $this->addError('Exception Message: ', $message);
            $this->notification()->error(
                'Error !!!',
                'Exception Message: ' . $message,
            );
        }

        $this->closeModalWithEvents([
            'pg:eventRefresh-default',
        ]);

        $this->notification()->success(
            'Success !!!',
            'Class was editted successfully',
        );
    }
    public function render()
    {
        return view('livewire.admin.classes.edit-action');
    }
}