<?php

namespace App\Http\Livewire\Staff\Report;

use Livewire\Component;

class GenerateReportsButton extends Component
{
    public $classId, $termId;
    public function render()
    {
        return view('livewire.staff.report.generate-reports-button');
    }
}