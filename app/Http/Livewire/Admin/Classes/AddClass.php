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
use Exception;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class AddClass extends ModalComponent
{
    use Actions;

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


    public function addClass()
    {
        $this->validate();
        try {
            $classname = ClassName::findOrFail($this->name);
            $classes = Classes::make([
                'name' => $classname->name,
                'house_name' => $this->house_name,
                'class_type' => $this->class_type,
                'campus' => $this->campus,
            ]);
            $classes->class_name()->associate($this->name);
            $classes->staff()->associate($this->staff_name);
            $classes->save();

            if ($this->class_type == 'creche' || $this->class_type == 'nursery' || $this->class_type == 'kg') {
                $subject = Subject::where('name', 'LIKE', '%all%')->orWhere('name', 'LIKE', '%all subjects%')->orWhere('name', 'LIKE', '%all subject%')->first();
                if ($subject) {
                    $clsSub = ClassesSubject::create([
                        'class_id' => $classes->id,
                        'subject_id' => $subject->id,
                        'staff_id' => $this->staff_name
                    ]);

                    $term = session()->get('CurrTerm') ? session()->get('CurrTerm') : null;
                    $gs = GradeSystem::where('subject_id', $clsSub->subject_id)->where('term_id', $term
                        ->id)->where('staff_id', $clsSub->staff_id)->where('class_id', $clsSub->class_id)->first();
                    if (!$gs) {
                        $gs = GradeSystem::create([
                            'subject_id' => $clsSub->subject_id,
                            'term_id' => $term->id,
                            'staff_id' => $clsSub->staff_id,
                            'class_id' => $clsSub->class_id,
                        ]);
                    }

                    if ($gs) {
                        foreach ($clsSub->class->students as  $student) {
                            // 
                            if ($clsSub->class->class_type == 'nursery') {
                                // 
                                $check = NurseryGrade::where('grade_id', $gs->id)->where('student_id', $student->id)->first();
                                if (!$check) {
                                    NurseryGrade::create([
                                        'grade_id' => $gs->id,
                                        'student_id' => $student->id,
                                    ]);
                                }
                            } elseif ($clsSub->class->class_type == 'kg') {
                                // 
                                $clsCheck = Classes::where('name', 'like', '%kindergarten two%')->orWhere('name', 'like', '%kindergarten 2%')->first();
                                if ($clsCheck->name === $clsSub->class->name) {
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
            }
            $this->closeModalWithEvents([
                'pg:eventRefresh-default',
            ]);

            $this->notification()->success(
                'Success !!!',
                'Subject was added successfully',
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
        return view('livewire.admin.classes.add-class');
    }
}