<?php

namespace App\Http\Livewire\Admin\Addmissions;

use App\Models\Addmission;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class Delete extends ModalComponent
{
    public ?int $addmissionId = null;

    public array $addmissionIds = [];

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
        if ($this->addmissionId) {
            Addmission::query()->find($this->addmissionId)->delete();
        }

        if ($this->addmissionIds) {
            Addmission::query()->whereIn('id', $this->addmissionIds)->delete();
        }

        $this->closeModalWithEvents([
            'pg:eventRefresh-default',
        ]);
    }


    public function render()
    {
        return view('livewire.admin.addmissions.delete');
    }
}