<?php

namespace App\Http\Livewire\Admin\Classes;

use App\Models\Classes;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class EditAction extends ModalComponent
{
    use Actions;

    public $classId;
    public $name, $house_name, $class_type, $campus;


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
            'house_name' => 'nullable|string|max:255',
            'class_type' => 'required|string|max:255',
            'campus' => 'required|string|max:255',
        ];
    }


    public function editClass()
    {
        $this->validate();

        if ($this->classId) {
            Classes::query()->find($this->classId)->update([
                'name' => $this->name,
                'house_name' => $this->house_name,
                'class_type' => $this->class_type,
                'campus' => $this->campus,
            ]);
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