<?php

namespace App\Http\Livewire\Staff\Attendance;

use App\Models\Attendance;
use App\Models\AttendanceStudent;
use App\Models\Classes;
use Exception;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use WireUi\Traits\Actions;

class Register extends Component
{
    use Actions;
    protected $listeners = ['refreshComponent' => '$refresh'];

    public Classes $classes;
    public array $checkboxes;
    public $attendance;


    public function mount(AttendanceStudent $model)
    {
        $term = session()->get('CurrTerm');
        if (!$term) {
            return route('staff.dashboard');
        }
        $staff = Auth::user()->staff;
        $this->attendance = Attendance::where('term_id', $term->id)
            ->where('class_id', $this->classes->id)
            ->where('staff_id', $staff->id)
            ->where('date', now()->format('Y-m-d'))->first();
        if (!$this->attendance) {
            $this->attendance = Attendance::create([
                "term_id" => $term->id,
                "class_id" => $this->classes->id,
                "staff_id" => $staff->id,
                "date" => now()->format('Y-m-d'),
            ]);
        }

        // get an array of ids
        $setOfIds = $model::where('attendance_id', $this->attendance->id)->where('status', 1)->pluck('student_id')->toArray();
        $this->checkboxes = array_fill_keys($setOfIds, true);
    }

    public function addAttendance($attendance_id)
    {
        try {
            if (!empty($this->checkboxes)) {
                foreach ($this->checkboxes as $student_id => $value) {
                    $student = AttendanceStudent::where('attendance_id', $attendance_id)->where('student_id', $student_id)->first();
                    if ($value) {
                        if (!$student) {
                            AttendanceStudent::create([
                                'attendance_id' => $attendance_id,
                                'student_id' => $student_id,
                                'status' => 1,
                            ]);
                        } else {
                            $student->update(['status' => 1]);
                        }
                    } else {
                        if ($student) {
                            $student->update(['status' => 0]);
                        }
                    }
                }
            }

            $this->emit('refreshComponent');
            $this->notification()->success(
                'Success !!!',
                'Attendance has been saved successfully! ',
            );
        } catch (Exception $e) {
            $message = $e->getMessage();
            $this->addError('Exception Message: ', $message);
            $this->notification()->error(
                'Error !!!',
                'Exception Message: ' . $message,
            );
        }
    }

    public function render()
    {
        // dd($this->classes);
        return view('livewire.staff.attendance.register');
    }
}