<?php

namespace App\Http\Livewire\Staff\Grade;

use Livewire\Component;

class NurseryStudentTable extends Component
{

    public $classes;
    public $subject;

    public function render()
    {
        // dd($this->subject);
        return view('livewire.staff.grade.nursery-student-table');
    }
}