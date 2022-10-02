<?php

namespace App\Http\Livewire\Admin\Classes;

use App\Models\Classes;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class DeleteAction extends ModalComponent
{
    use Actions;

    public ?int $classId = null;

    public array $classIds = [];

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

    public function confirm()
    {
        if ($this->classId) {
            Classes::query()->find($this->classId)->delete();
        }

        $this->closeModalWithEvents([
            'pg:eventRefresh-default',
        ]);

        $this->notification()->success(
            'Success !!!',
            'class was delete successfully',
        );
    }
    public function render()
    {
        return view('livewire.admin.classes.delete-action');
    }
}