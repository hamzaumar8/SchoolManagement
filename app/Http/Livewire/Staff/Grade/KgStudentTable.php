<?php

namespace App\Http\Livewire\Staff\Grade;

use Livewire\Component;

class KgStudentTable extends Component
{
    public $classes;
    public $subject;


    public function render()
    {
        return view('livewire.staff.grade.kg-student-table');
    }
}