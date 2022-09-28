<?php

namespace App\Http\Livewire\Admin\Subject;

use App\Models\Subject;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class DeleteAction extends ModalComponent
{
    use Actions;

    public ?int $subjectId = null;

    public array $subjectIds = [];

    public string $confirmationTitle = '';

    public string $confirmationDescription = '';

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
        if ($this->subjectId) {
            Subject::query()->find($this->subjectId)->delete();
        }

        $this->closeModalWithEvents([
            'pg:eventRefresh-default',
        ]);

        $this->notification()->success(
            'Success !!!',
            'Subject was delete successfully',
        );
    }
    public function render()
    {
        return view('livewire.admin.subject.delete-action');
    }
}