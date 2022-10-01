<?php

namespace App\Http\Livewire\Admin\Classes;

use App\Models\Classes;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class AddClass extends ModalComponent
{
    use Actions;

    public $name, $code, $description;


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
            'code' => 'nullable|string|max:255',
        ];
    }


    public function addSubject()
    {
        $this->validate();

        Classes::create([
            'name' => $this->name,
            'code' => $this->code,
        ]);

        $this->closeModalWithEvents([
            'pg:eventRefresh-default',
        ]);

        $this->notification()->success(
            'Success !!!',
            'Subject was added successfully',
        );
    }

    public function render()
    {
        return view('livewire.admin.classes.add-class');
    }
}