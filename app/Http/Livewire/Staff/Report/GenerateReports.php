<?php

namespace App\Http\Livewire\Staff\Report;

use App\Models\Classes;
use App\Models\TerminalReport;
use Exception;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class GenerateReports extends ModalComponent
{
    use Actions;

    public $classId;
    public $termId;
    public $name, $house_name, $class_type, $campus, $reopen_date;


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

    protected $rules = [
        'reopen_date' => 'required|date',
    ];

    public function generateReports()
    {
        $this->validate();
        try {
            $class = Classes::findOrFail($this->classId);
            foreach ($class->students as $student) {
                $overall_enrollment = $student->classOverallEnrollmentTotal($class->name);
                $attendance_present_total = $student->studentTotalPresentAttendanceReport($this->termId, $class->id, $student->id);
                $attendance_total = $student->studentTotalAttendanceReport($this->termId, $class->id, $student->id);
                $class_enrollment = $student->class->students->count();
                $class_position = $student->classPosition($this->termId, $class->id, $student->id);
                $overall_position = $student->overallClassPosition($this->termId, $class->id, $student->id);

                $check = TerminalReport::where('term_id', $this->termId)->where('class_id', $class->id)->where('student_id', $student->id)->first();
                if (!$check) {
                    $check = TerminalReport::create([
                        'term_id' => $this->termId,
                        'class_id' => $class->id,
                        'student_id' => $student->id,
                        'reopen_date' => $this->reopen_date,
                        'overall_enrollment' => $overall_enrollment,
                        'attendance_present_total' => $attendance_present_total,
                        'attendance_total' => $attendance_total,
                        'class_enrollment' => $class_enrollment,
                        'class_position' => $class_position,
                        'overall_position' => $overall_position,
                    ]);
                } else {
                    $check->reopen_date = $this->reopen_date;
                    $check->overall_enrollment = $overall_enrollment;
                    $check->attendance_present_total = $attendance_present_total;
                    $check->attendance_total = $attendance_total;
                    $check->class_enrollment = $class_enrollment;
                    $check->class_position = $class_position;
                    $check->overall_position = $overall_position;
                    $check->save();
                }
            }

            $this->closeModalWithEvents([
                'pg:eventRefresh-default',
            ]);
            $this->notification()->success(
                'Success !!!',
                'All students Reports has been generated successfully! ',
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
        return view('livewire.staff.report.generate-reports');
    }
}