<?php

namespace App\Http\Livewire\Admin\Classes;

use App\Models\Classes;
use App\Models\ClassesSubject;
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
            'name' => 'required|string|max:255',
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

            // dd($this->class_type);
            $classes = Classes::make([
                'name' => $this->name,
                'house_name' => $this->house_name,
                'class_type' => $this->class_type,
                'campus' => $this->campus,
            ]);
            $classes->staff()->associate($this->staff_name);

            $classes->save();
            if ($this->class_type == 'creche' || $this->class_type == 'nursery' || $this->class_type == 'kg') {
                $subject = Subject::where('name', 'LIKE', '%all%')->orWhere('name', 'LIKE', '%all subjects%')->orWhere('name', 'LIKE', '%all subject%')->first();
                if ($subject) {
                    ClassesSubject::create([
                        'class_id' => $classes->id,
                        'subject_id' => $subject->id,
                        'staff_id' => $this->staff_name
                    ]);
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