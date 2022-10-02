<?php

namespace App\Http\Livewire\Admin\Staff;

use App\Mail\Admin\StaffInvite;
use App\Models\Staff;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class Create extends Component
{
    use WithFileUploads;
    use Actions;

    public $staff_number, $staff_type, $title, $full_name, $gender, $email, $phone1, $phone2, $residential_address, $birthdate, $religion, $marital_status, $passport_picture, $campus;

    protected function rules()
    {
        return [
            'staff_number' => 'required|string|max:255',
            'staff_type' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'full_name' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone1' => 'required|string|max:20',
            'phone2' => 'nullable|string|max:20',
            'residential_address' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'religion' => 'required|string|max:255',
            'marital_status' => 'required|string|max:255',
            'passport_picture' => 'required|mimes:webp,jpeg,jpg,png',
            'campus' => 'required|string|max:255',
        ];
    }


    // Submit and save
    public function submit()
    {
        // validate fields
        $this->validate();

        try {

            $passport_picture_name = "staff.jpg";
            if ($this->passport_picture) {
                $passport_picture_name = Str::random(15) . '-' . Carbon::now()->timestamp . '.' . $this->passport_picture->extension();
                $this->passport_picture->storeAs('staff', $passport_picture_name);
            }

            $staff = Staff::create([
                'staff_number' => $this->staff_number,
                'staff_type' => $this->staff_type,
                'title' => $this->title,
                'full_name' => $this->full_name,
                'gender' => $this->gender,
                'email' => $this->email,
                'phone1' => $this->phone1,
                'phone2' => $this->phone2,
                'residential_address' => $this->residential_address,
                'birthdate' => $this->birthdate,
                'religion' => $this->religion,
                'marital_status' => $this->marital_status,
                'passport_picture' => $this->passport_picture,
                'campus' => $this->campus,
            ]);

            // Sent Invite Mail
            Mail::to($staff->email)->send(new StaffInvite($staff));

            // redirect to the index
            session()->flash('message', 'Staff Details was added and invite email has been sent successfull!');
            return redirect()->route('staffs.index');
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
        return view('livewire.admin.staff.create');
    }
}