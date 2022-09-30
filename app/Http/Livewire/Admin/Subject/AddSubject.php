<?php

namespace App\Http\Livewire\Admin\Subject;

use App\Models\Subject;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class AddSubject extends ModalComponent
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

        Subject::create([
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
        return view('livewire.admin.subject.add-subject');
    }
}