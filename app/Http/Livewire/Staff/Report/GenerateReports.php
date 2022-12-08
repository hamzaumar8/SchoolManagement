<?php

namespace App\Http\Livewire\Staff\Report;

use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class GenerateReports extends ModalComponent
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

    public function render()
    {
        return view('livewire.staff.report.generate-reports');
    }
}