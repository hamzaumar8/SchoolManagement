<?php

namespace App\Http\Livewire\Staff\Attendance;

use App\Models\Attendance;
use App\Models\AttendanceStudent;
use App\Models\Classes;
use App\Models\Student;
use Carbon\Carbon;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
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
    public $attendance_date, $dated;



    public function mount()
    {
        $this->dated = Carbon::parse($this->attendance_date);
        $this->hattendance();
    }


    public function hattendance()
    {
        $term = session()->get('CurrTerm');
        $staff = Auth::user()->staff;
        try {
            if (
                date('l', strtotime($this->attendance_date)) == 'Sunday' || date('l', strtotime($this->attendance_date)) == 'Saturday'
            ) {
                $this->notification()->error(
                    'Error !!!',
                    $this->attendance_date . ' date falls on a weekend',
                );
            } else {

                $this->attendance = Attendance::where('term_id', $term->id)
                    ->where('class_id', $this->classes->id)
                    ->where('staff_id', $staff->id)
                    ->where('date', $this->attendance_date)->first();
                if (!$this->attendance) {

                    $this->attendance = Attendance::create([
                        "term_id" => $term->id,
                        "class_id" => $this->classes->id,
                        "staff_id" => $staff->id,
                        "date" => $this->attendance_date,
                    ]);
                }

                $classStudent = Student::where('class_id', $this->classes->id)->get();
                // dd($classStudent);
                foreach ($classStudent as $student) {
                    $check = AttendanceStudent::where('attendance_id', $this->attendance->id)->where('student_id', $student->id)->first();
                    if (!$check) {
                        AttendanceStudent::create([
                            'attendance_id' => $this->attendance->id,
                            'student_id' => $student->id,
                        ]);
                    }
                }
            }
        } catch (Exception $e) {
            $message = $e->getMessage();
            $this->addError('Exception Message: ', $message);
            $this->notification()->error(
                'Error !!!',
                'Exception Message: ' . $message,
            );
        }

        // get an array of ids
        $setOfIds = AttendanceStudent::where('attendance_id', $this->attendance->id)->where('status', 1)->pluck('student_id')->toArray();
        $this->checkboxes = array_fill_keys($setOfIds, true);
    }

    public function addAttendance($attendance_id)
    {
        try {
            if (
                date('l', strtotime($this->attendance_date)) == 'Sunday' || date('l', strtotime($this->attendance_date)) == 'Saturday'
            ) {
                $this->notification()->error(
                    'Error !!!',
                    $this->attendance_date . ' date falls on a weekend',
                );
            } else {
                if (!empty($this->checkboxes)) {
                    foreach ($this->checkboxes as $student_id => $value) {
                        $student = AttendanceStudent::where('attendance_id', $attendance_id)->where('student_id', $student_id)->first();
                        if ($value) {
                            $student->update(['status' => 1]);
                        } else {
                            $student->update(['status' => 0]);
                        }
                    }
                }
                $this->notification()->success(
                    'Success !!!',
                    'Attendance has been saved successfully! ',
                );
            }
        } catch (Exception $e) {
            $message = $e->getMessage();
            $this->addError('Exception Message: ', $message);
            $this->notification()->error(
                'Error !!!',
                'Exception Message: ' . $message,
            );
        }
    }

    public function updatedAttendanceDate($field)
    {
        $this->attendance_date = $field;
        $this->dated = Carbon::parse($this->attendance_date);
        $this->hattendance();
        $this->emit('refreshComponent');
    }

    public function render()
    {
        // dd($this->classes);
        return view('livewire.staff.attendance.register');
    }
}