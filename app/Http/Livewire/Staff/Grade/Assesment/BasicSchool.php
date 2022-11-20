<?php

namespace App\Http\Livewire\Staff\Grade\Assesment;

use Livewire\Component;

class BasicSchool extends Component
{
    public $gradesystem;
    public function render()
    {
        return view('livewire.staff.grade.assesment.basic-school');
    }
}