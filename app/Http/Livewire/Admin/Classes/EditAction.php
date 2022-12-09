<?php

namespace App\Http\Livewire\Admin\Classes;

use App\Models\Classes;
use App\Models\ClassesSubject;
use App\Models\ClassName;
use App\Models\Subject;
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
                    ClassesSubject::firstOrCreate(
                        ['class_id' => $classes->id],
                        ['subject_id' => $subject->id],
                        ['staff_id' => $this->staff_name],
                    );
                }
            }
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