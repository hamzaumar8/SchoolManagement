<?php

namespace App\Http\Livewire\Admin\Addmissions;

use App\Models\Addmission;
use App\Models\Classes;
use App\Models\EmergencyContact;
use App\Models\HealthStatus;
use App\Models\ParentGuardian;
use App\Models\Student;
use Carbon\Carbon;
use Exception;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class Addmit extends ModalComponent
{
    use Actions;

    public $addmissionId;
    public $date_entrance_exam;
    public $class_approved;
    public $class_type;
    public $term_addmitted;
    public $routeId = '';

    public static function modalMaxWidth(): string
    {
        return 'lg';
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

    protected function rules()
    {
        return [
            'date_entrance_exam' => 'required|date',
            'class_approved' => 'required',
            'term_addmitted' => 'required',
            'class_type' => 'required',
        ];
    }

    public function addmit()
    {
        $this->validate();

        try {

            $classes = Classes::where('id', $this->class_approved)->first();
            $addmission = Addmission::find($this->addmissionId);
            $addmission->class_approved = $classes->name;
            $addmission->class_type = $this->class_type;
            $addmission->term = $this->term_addmitted;
            $addmission->date_admitted = null;
            $addmission->status = 'addmitted';
            $addmission->save();

            // Index number Generator
            $startOfYear = Carbon::now()->startOfYear();
            $endOfYear = Carbon::now()->endOfYear();
            $currYear = Carbon::now()->format('y');
            $std = Student::where('campus', $addmission->campus)->where('created_at', '>', $startOfYear)->where('created_at', '<', $endOfYear)->count();

            $prfx = 'UBS';
            if ($classes->category === 'junior high') {
                $prfx = 'UJHS';
                $cls = Classes::where('category', 'junior high')->pluck('id')->toArray();
                $std = Student::where('campus', $addmission->campus)->where('created_at', '>', $startOfYear)->where('created_at', '<', $endOfYear)->whereIn('class_id', $cls)->count();
            }
            if ($addmission->campus === 'north') {
                $prfx .= 'A';
            }

            $index_number = $prfx . '/' . $currYear . '/' . str_pad($std + 1, 5, '0', STR_PAD_LEFT);

            // save student information
            $student = Student::make([
                'addmission_number' => $addmission->addmission_number,
                'index_number' => $index_number,
                'first_name' => $addmission->first_name,
                'surname' => $addmission->surname,
                'other_name' => $addmission->other_name,
                'gender' => $addmission->gender,
                'birthdate' => $addmission->birthdate,
                'class_type' => $this->class_type,
                'campus' => $addmission->campus,
            ]);

            $student->class()->associate($this->class_approved);
            $student->addmission()->associate($addmission->id);
            $student->save();

            // Father
            $parent_father = ParentGuardian::make([
                'full_name' => $addmission->father_name,
                'email' => $addmission->father_email,
                'phone_number' => $addmission->father_phone_number,
                'occupation' => $addmission->father_occupation,
                'home_digital_address' => $addmission->father_home_digital_address,
                'relation' => 'father'
            ]);
            $parent_father->student()->associate($student->id);
            $parent_father->save();

            // Mother
            $parent_mother = ParentGuardian::make([
                'full_name' => $addmission->mother_name,
                'email' => $addmission->mother_email,
                'phone_number' => $addmission->mother_phone_number,
                'occupation' => $addmission->mother_occupation,
                'home_digital_address' => $addmission->mother_home_digital_address,
                'relation' => 'mother'
            ]);
            $parent_mother->student()->associate($student->id);
            $parent_mother->save();

            // Guardian
            if ($addmission->guardian_name) {
                $parent_guardian = ParentGuardian::make([
                    'full_name' => $addmission->guardian_name,
                    'email' => $addmission->guardian_email,
                    'phone_number' => $addmission->guardian_phone_number,
                    'occupation' => $addmission->guardian_occupation,
                    'home_digital_address' => $addmission->guardian_home_digital_address,
                    'relation' => $addmission->guardian_relation
                ]);
                $parent_guardian->student()->associate($student->id);
                $parent_guardian->save();
            }

            // health
            $health = HealthStatus::make([
                'chronic_health_problem' => $addmission->chronic_health_problem,
                'chp_report' => null,
                'diagnose_physical_challenge' => $addmission->diagnose_physical_challenge,
                'dpc_report' => null,
            ]);
            $health->student()->associate($student->id);
            $health->save();


            // Emergency Contacts
            $contact1 = EmergencyContact::make([
                'name' => $addmission->contact_name1,
                'phone_number' => $addmission->contact_phone_number1,
            ]);
            $contact1->student()->associate($student->id);
            $contact1->save();

            // Emergency Contacts
            if ($addmission->contact_name2) {
                $contact2 = EmergencyContact::make([
                    'name' => $addmission->contact_name1,
                    'phone_number' => $addmission->contact_phone_number1,
                ]);
                $contact2->student()->associate($student->id);
                $contact2->save();
            }

            session()->flash('success', 'Property was assigned to owners successfully');

            if ($this->routeId === 'show') {
                return redirect()->route('property.show', $this->addmissionId);
            }
            return redirect()->route('addmissions.index');

            // $this->closeModalWithEvents([
            //     'pg:eventRefresh-default',
            // ]);

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
        $addmission = Addmission::findOrFail($this->addmissionId);
        return view('livewire.admin.addmissions.addmit', compact('addmission'));
    }
}