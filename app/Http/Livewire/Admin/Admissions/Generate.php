<?php

namespace App\Http\Livewire\Admin\Addmission;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class Generate extends ModalComponent
{
    public ?int $dishId = null;

    public array $dishIds = [];

    public string $confirmationTitle = '';

    public string $confirmationDescription = '';


    public function mount()
    {
        $this->user = $user;
    }


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
        dd('generate');
        // if ($this->dishId) {
        //     Dish::query()->find($this->dishId)->delete();
        // }

        // if ($this->dishIds) {
        //     Dish::query()->whereIn('id', $this->dishIds)->delete();
        // }

        // $this->closeModalWithEvents([
        //     'pg:eventRefresh-default',
        // ]);
    }

    public function render()
    {
        return view('livewire.admin.addmissions.generate');
    }
}
