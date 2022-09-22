<?php

namespace App\Http\Livewire\Voucher;

use App\Models\Addmission;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Exception;
use WireUi\Traits\Actions;

class Form extends Component
{
    use WithFileUploads;
    use Actions;

    public $first_name, $surname, $other_name, $gender, $birthdate, $birthplace, $religion, $nationality, $home_town, $first_language, $previous_school, $previous_class, $passport_picture;

    public $father_name, $father_email, $father_phone_number, $father_occupation, $father_home_digital_address, $mother_name, $mother_email, $mother_phone_number, $mother_occupation, $mother_home_digital_address, $guardian_name, $guardian_email, $guardian_phone_number, $guardian_occupation, $guardian_home_digital_address, $guardian_relation, $parent_staff;

    public $personnel_number, $unit_section_department, $registered_biological_ward, $registered_ward, $registered_ward_explain;

    public $contact_name1, $contact_phone_number1, $contact_name2, $contact_phone_number2;

    public $chronic_health_problem, $chp_report, $diagnose_physical_challenge, $dpc_report, $disciplinary_problem, $athletics1, $athletics2, $games1, $games2, $hobbies1, $hobbies2, $academic_achievement1, $academic_achievement2, $neatness, $honesty, $emotinal_control, $friendliness, $work_habits;

    public $saved_passport_picture;

    public $state = [
        'parent_staff' => '',
    ];

    public function mount()
    {
        $addmission_number = session()->get('VoucherUser')['addmission_number'];
        $addmission = Addmission::where('addmission_number', $addmission_number)->first();
        if ($addmission) {
            $this->first_name = $addmission->first_name;
            $this->surname = $addmission->surname;
            $this->other_name = $addmission->other_name;
            $this->gender = $addmission->gender;
            $this->birthdate = $addmission->birthdate;
            $this->birthplace = $addmission->birthplace;
            $this->religion = $addmission->religion;
            $this->nationality = $addmission->nationality;
            $this->home_town = $addmission->home_town;
            $this->first_language = $addmission->first_language;
            $this->previous_school = $addmission->previous_school;
            $this->previous_class = $addmission->previous_class;
            $this->saved_passport_picture = $addmission->passport_picture;

            // Parent information
            $this->father_name = $addmission->father_name;
            $this->father_email = $addmission->father_email;
            $this->father_phone_number = $addmission->father_phone_number;
            $this->father_occupation = $addmission->father_occupation;
            $this->father_home_digital_address = $addmission->father_home_digital_address;

            $this->mother_name = $addmission->mother_name;
            $this->mother_email = $addmission->mother_email;
            $this->mother_phone_number = $addmission->mother_phone_number;
            $this->mother_occupation = $addmission->mother_occupation;
            $this->mother_home_digital_address = $addmission->mother_home_digital_address;

            $this->guardian_name = $addmission->guardian_name;
            $this->guardian_email = $addmission->guardian_email;
            $this->guardian_phone_number = $addmission->guardian_phone_number;
            $this->guardian_occupation = $addmission->guardian_occupation;
            $this->guardian_home_digital_address = $addmission->guardian_home_digital_address;
            $this->guardian_relation = $addmission->guardian_relation;

            $this->parent_staff = $addmission->parent_staff;


            // for Staff Only
            $this->personnel_number = $addmission->personnel_number;
            $this->unit_section_department = $addmission->unit_section_department;
            $this->registered_biological_ward = $addmission->registered_biological_ward;
            $this->registered_ward = $addmission->registered_ward;
            $this->registered_ward_explain = $addmission->registered_ward_explain;

            // Contact Information
            $this->contact_name1 = $addmission->contact_name1;
            $this->contact_phone_number1 = $addmission->contact_phone_number1;
            $this->contact_name2 = $addmission->contact_name2;
            $this->contact_phone_number2 = $addmission->contact_phone_number2;

            // Health Status
            $this->chronic_health_problem = $addmission->chronic_health_problem;
            $this->chp_report = $addmission->chp_report;
            $this->diagnose_physical_challenge = $addmission->diagnose_physical_challenge;
            $this->dpc_report = $addmission->dpc_report;

            // disciplinary report
            $this->disciplinary_problem = $addmission->disciplinary_problem;

            // significant information
            $this->athletics1 = $addmission->athletics1;
            $this->athletics2 = $addmission->athletics2;
            $this->games1 = $addmission->games1;
            $this->games2 = $addmission->games2;
            $this->hobbies1 = $addmission->hobbies1;
            $this->hobbies2 = $addmission->hobbies2;
            $this->academic_achievement1 = $addmission->academic_achievement1;
            $this->academic_achievement2 = $addmission->academic_achievement2;

            // development Development
            $this->neatness = $addmission->neatness;
            $this->honesty = $addmission->honesty;
            $this->emotinal_control = $addmission->emotinal_control;
            $this->friendliness = $addmission->friendliness;
            $this->work_habits = $addmission->work_habits;
        }
    }

    protected function rules()
    {
        return [
            'first_name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'other_name' => 'nullable|string|max:255',
            'gender' => 'required|string',
            'birthdate' => 'required|date',
            'birthplace' => 'required|string|max:255',
            'religion' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'home_town' => 'required|max:string|max:255',
            'first_language' => 'required|string|max:255',
            'previous_school' => 'required|string|max:255',
            'previous_class' => 'required|string|max:255',
            'passport_picture' => 'nullable|mimes:webp,jpeg,jpg,png',

            // Father
            'father_name' => 'required|string|max:255',
            'father_email' => 'required|string|email|max:255',
            'father_phone_number' => 'required|max:20',
            'father_occupation' => 'required|string|max:255',
            'father_home_digital_address' => 'required|string|max:255',

            // Mother
            'mother_name' => 'required|string|max:255',
            'mother_email' => 'required|string|email|max:255',
            'mother_phone_number' => 'required|max:20',
            'mother_occupation' => 'required|string|max:255',
            'mother_home_digital_address' => 'required|string|max:255',

            // Guardian
            'guardian_name' => 'nullable|string',
            'guardian_email' => 'nullable|string|email|max:255',
            'guardian_phone_number' => 'nullable|max:20',
            'guardian_occupation' => 'nullable|string|max:255',
            'guardian_home_digital_address' => 'nullable|string|max:255',
            'guardian_relation' => 'nullable|string|string|max:255',

            'parent_staff' => 'required',
            // emergency
            'contact_name1' => 'required|string|max:255',
            'contact_phone_number1' => 'required|max:20',
            'contact_name2' => 'nullable|string|max:255',
            'contact_phone_number2' => 'nullable|max:20',

            // Health Status
            'chronic_health_problem' => 'required',
            'chp_report' => 'nullable|mimes:webp,jpeg,jpg,png,pdf',
            'diagnose_physical_challenge' => 'required',
            'dpc_report' => 'nullable|mimes:webp,jpeg,jpg,png,pdf',

            // significant information
            'athletics1' => 'required|string|max:255',
            'athletics2' => 'required|string|max:255',
            'games1' => 'required|string|max:255',
            'games2' => 'required|string|max:255',
            'hobbies1' => 'required|string|max:255',
            'hobbies2' => 'required|string|max:255',
            'academic_achievement1' => 'nullable|string|max:255',
            'academic_achievement2' => 'nullable|string|max:255',

            // development Development
            'neatness' => 'required',
            'honesty' => 'required',
            'emotinal_control' => 'required',
            'friendliness' => 'required',
            'work_habits' => 'required',
        ];
    }

    // public function updated($fields)
    // {
    //     $this->validateOnly($fields);
    // }

    public function save()
    {
        $this->validate([
            'first_name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'other_name' => 'nullable|string|max:255',
            'gender' => 'required|string',
            'birthdate' => 'required|date',
            'birthplace' => 'required|string|max:255',
            'religion' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'home_town' => 'required|max:string|max:255',
            'first_language' => 'required|string|max:255',
            'previous_school' => 'required|string|max:255',
            'previous_class' => 'required|string|max:255',
            'passport_picture' => 'nullable|mimes:webp,jpeg,jpg,png',

            // Father
            'father_name' => 'nullable|string|max:255',
            'father_email' => 'nullable|string|email|max:255',
            'father_phone_number' => 'nullable|max:20',
            'father_occupation' => 'nullable|string|max:255',
            'father_home_digital_address' => 'nullable|string|max:255',

            // Mother
            'mother_name' => 'nullable|string|max:255',
            'mother_email' => 'nullable|string|email|max:255',
            'mother_phone_number' => 'nullable|max:20',
            'mother_occupation' => 'nullable|string|max:255',
            'mother_home_digital_address' => 'nullable|string|max:255',

            // Guardian
            'guardian_name' => 'nullable|string',
            'guardian_email' => 'nullable|string|email|max:255',
            'guardian_phone_number' => 'nullable|max:20',
            'guardian_occupation' => 'nullable|string|max:255',
            'guardian_home_digital_address' => 'nullable|string|max:255',
            'guardian_relation' => 'nullable|string|string|max:255',

            'parent_staff' => 'nullable',

            // emergency
            'contact_name1' => 'nullable|string|max:255',
            'contact_phone_number1' => 'nullable|max:20',
            'contact_name2' => 'nullable|string|max:255',
            'contact_phone_number2' => 'nullable|max:20',

            // Health Status
            'chronic_health_problem' => 'nullable',
            'chp_report' => 'nullable',
            'diagnose_physical_challenge' => 'nullable',
            'dpc_report' => 'nullable',

            // significant information
            'athletics1' => 'nullable|string|max:255',
            'athletics2' => 'nullable|string|max:255',
            'games1' => 'nullable|string|max:255',
            'games2' => 'nullable|string|max:255',
            'hobbies1' => 'nullable|string|max:255',
            'hobbies2' => 'nullable|string|max:255',
            'academic_achievement1' => 'nullable|string|max:255',
            'academic_achievement2' => 'nullable|string|max:255',

            // development Development
            'neatness' => 'nullable',
            'honesty' => 'nullable',
            'emotinal_control' => 'nullable',
            'friendliness' => 'nullable',
            'work_habits' => 'nullable',
        ]);


        try {
            $passport_picture_name = $this->saved_passport_picture;
            if ($this->passport_picture) {
                if ($this->saved_passport_picture) {
                    $path = base_path('assets\\img\\addmission\\' . $this->saved_passport_picture);
                    if (env('APP_ENV') == 'local') {
                        $path = public_path('assets\\img\\addmission\\' . $this->saved_passport_picture);
                    }

                    unlink($path);
                }
                $passport_picture_name = Str::random(15) . '-' . Carbon::now()->timestamp . '.' . $this->passport_picture->extension();
                $this->passport_picture->storeAs('addmission', $passport_picture_name);
            }

            $addmission_number = session()->get('VoucherUser')['addmission_number'];
            $addmission = Addmission::where('addmission_number', $addmission_number)->first();
            if ($addmission) {
                $addmission = Addmission::find($addmission->id);
                $addmission->first_name = $this->first_name;
                $addmission->surname = $this->surname;
                $addmission->other_name = $this->other_name;
                $addmission->gender = $this->gender;
                $addmission->birthdate = $this->birthdate;
                $addmission->birthplace = $this->birthplace;
                $addmission->religion = $this->religion;
                $addmission->nationality = $this->nationality;
                $addmission->home_town = $this->home_town;
                $addmission->first_language = $this->first_language;
                $addmission->previous_school = $this->previous_school;
                $addmission->previous_class = $this->previous_class;
                $addmission->passport_picture = $passport_picture_name;

                // Parent information
                $addmission->father_name = $this->father_name;
                $addmission->father_email = $this->father_email;
                $addmission->father_phone_number = $this->father_phone_number;
                $addmission->father_occupation = $this->father_occupation;
                $addmission->father_home_digital_address = $this->father_home_digital_address;

                $addmission->mother_name = $this->mother_name;
                $addmission->mother_email = $this->mother_email;
                $addmission->mother_phone_number = $this->mother_phone_number;
                $addmission->mother_occupation = $this->mother_occupation;
                $addmission->mother_home_digital_address = $this->mother_home_digital_address;

                $addmission->guardian_name = $this->guardian_name;
                $addmission->guardian_email = $this->guardian_email;
                $addmission->guardian_phone_number = $this->guardian_phone_number;
                $addmission->guardian_occupation = $this->guardian_occupation;
                $addmission->guardian_home_digital_address = $this->guardian_home_digital_address;
                $addmission->guardian_relation = $this->guardian_relation;

                $addmission->parent_staff = $this->parent_staff;

                // for Staff Only
                $addmission->personnel_number = $this->personnel_number;
                $addmission->unit_section_department = $this->unit_section_department;
                $addmission->registered_biological_ward = $this->registered_biological_ward;
                $addmission->registered_ward = $this->registered_ward;
                $addmission->registered_ward_explain = $this->registered_ward_explain;

                // Contact Information
                $addmission->contact_name1 = $this->contact_name1;
                $addmission->contact_phone_number1 = $this->contact_phone_number1;
                $addmission->contact_name2 = $this->contact_name2;
                $addmission->contact_phone_number2 = $this->contact_phone_number2;

                // Health Status
                $addmission->chronic_health_problem = $this->chronic_health_problem;
                $addmission->chp_report = $this->chp_report;
                $addmission->diagnose_physical_challenge = $this->diagnose_physical_challenge;
                $addmission->dpc_report = $this->dpc_report;

                // disciplinary report
                $addmission->disciplinary_problem = $this->disciplinary_problem;

                // significant information
                $addmission->athletics1 = $this->athletics1;
                $addmission->athletics2 = $this->athletics2;
                $addmission->games1 = $this->games1;
                $addmission->games2 = $this->games2;
                $addmission->hobbies1 = $this->hobbies1;
                $addmission->hobbies2 = $this->hobbies2;
                $addmission->academic_achievement1 = $this->academic_achievement1;
                $addmission->academic_achievement2 = $this->academic_achievement2;

                // development Development
                $addmission->neatness = $this->neatness;
                $addmission->honesty = $this->honesty;
                $addmission->emotinal_control = $this->emotinal_control;
                $addmission->friendliness = $this->friendliness;
                $addmission->work_habits = $this->work_habits;

                $addmission->save();
            } else {
                Addmission::create([
                    'addmission_number' => $addmission_number,
                    'first_name' => $this->first_name,
                    'surname' => $this->surname,
                    'other_name' => $this->other_name,
                    'gender' => $this->gender,
                    'birthdate' => $this->birthdate,
                    'birthplace' => $this->birthplace,
                    'religion' => $this->religion,
                    'nationality' => $this->nationality,
                    'home_town' => $this->home_town,
                    'first_language' => $this->first_language,
                    'previous_school' => $this->previous_school,
                    'previous_class' => $this->previous_class,
                    'passport_picture' => $passport_picture_name,

                    // Parent information
                    'father_name' => $this->father_name,
                    'father_email' => $this->father_email,
                    'father_phone_number' => $this->father_phone_number,
                    'father_occupation' => $this->father_occupation,
                    'father_home_digital_address' => $this->father_home_digital_address,

                    'mother_name' => $this->mother_name,
                    'mother_email' => $this->mother_email,
                    'mother_phone_number' => $this->mother_phone_number,
                    'mother_occupation' => $this->mother_occupation,
                    'mother_home_digital_address' => $this->mother_home_digital_address,

                    'guardian_name' => $this->guardian_name,
                    'guardian_email' => $this->guardian_email,
                    'guardian_phone_number' => $this->guardian_phone_number,
                    'guardian_occupation' => $this->guardian_occupation,
                    'guardian_home_digital_address' => $this->guardian_home_digital_address,
                    'guardian_relation' => $this->guardian_relation,

                    'parent_staff' => $this->parent_staff,

                    // for Staff Only
                    'personnel_number' => $this->personnel_number,
                    'unit_section_department' => $this->unit_section_department,
                    'registered_biological_ward' => $this->registered_biological_ward,
                    'registered_ward' => $this->registered_ward,
                    'registered_ward_explain' => $this->registered_ward_explain,

                    // Contact Information
                    'contact_name1' => $this->contact_name1,
                    'contact_phone_number1' => $this->contact_phone_number1,
                    'contact_name2' => $this->contact_name2,
                    'contact_phone_number2' => $this->contact_phone_number2,

                    // Health Status
                    'chronic_health_problem' => $this->chronic_health_problem,
                    'chp_report' => $this->chp_report,
                    'diagnose_physical_challenge' => $this->diagnose_physical_challenge,
                    'dpc_report' => $this->dpc_report,

                    // disciplinary report
                    'disciplinary_problem' => $this->disciplinary_problem,

                    // significant information
                    'athletics1' => $this->athletics1,
                    'athletics2' => $this->athletics2,
                    'games1' => $this->games1,
                    'games2' => $this->games2,
                    'hobbies1' => $this->hobbies1,
                    'hobbies2' => $this->hobbies2,
                    'academic_achievement1' => $this->academic_achievement1,
                    'academic_achievement2' => $this->academic_achievement2,

                    // development Development
                    'neatness' => $this->neatness,
                    'honesty' => $this->honesty,
                    'emotinal_control' => $this->emotinal_control,
                    'friendliness' => $this->friendliness,
                    'work_habits' => $this->work_habits,
                ]);
            }
            session()->flash('message', 'Addimssion Details was successfull saved!');
            return redirect()->route('voucher.index');
        } catch (Exception $e) {
            $message = $e->getMessage();
            $this->addError('Exception Message: ', $message);
            $this->notification()->error(
                'Error !!!',
                'Exception Message: ' . $message,
            );
        }
    }

    // Submit and save
    public function submit()
    {
        // validate fields
        $this->validate();
        // validate the staff information
        if ($this->parent_staff == 'staff') {
            $this->validate([
                'personnel_number' => 'required|string|max:10',
                'unit_section_department' => 'required|string|max:255',
                'registered_biological_ward' => 'required|string|max:255',
                'registered_ward' => 'required|string|max:255',
                'registered_ward_explain' => 'nullable|string|max:255',
            ]);
        }
        if ($this->chronic_health_problem == 'yes') {
            $this->validate([
                'chp_report' => 'required|mimes:webp,jpeg,jpg,png,pdf',
            ]);
        }
        if ($this->diagnose_physical_challenge == 'yes') {
            $this->validate([
                'dpc_report' => 'required|mimes:webp,jpeg,jpg,png,pdf',
            ]);
        }
        if (!$this->saved_passport_picture) {
            $this->validate([
                'passport_picture' => 'required|mimes:webp,jpeg,jpg,png,pdf',
            ]);
        }
        try {

            $passport_picture_name = $this->saved_passport_picture;
            if ($this->passport_picture) {
                if ($this->saved_passport_picture) {
                    $path = base_path('assets\\img\\addmission\\' . $this->saved_passport_picture);
                    if (env('APP_ENV') == 'local') {
                        $path = public_path('assets\\img\\addmission\\' . $this->saved_passport_picture);
                    }

                    unlink($path);
                }
                $passport_picture_name = Str::random(15) . '-' . Carbon::now()->timestamp . '.' . $this->passport_picture->extension();
                $this->passport_picture->storeAs('addmission', $passport_picture_name);
            }

            $addmission_number = session()->get('VoucherUser')['addmission_number'];
            $campus = session()->get('VoucherUser')['campus'];
            $addmission = Addmission::where('addmission_number', $addmission_number)->first();
            if ($addmission) {
                $addmission = Addmission::find($addmission->id);
                $addmission->first_name = $this->first_name;
                $addmission->surname = $this->surname;
                $addmission->other_name = $this->other_name;
                $addmission->gender = $this->gender;
                $addmission->birthdate = $this->birthdate;
                $addmission->birthplace = $this->birthplace;
                $addmission->religion = $this->religion;
                $addmission->nationality = $this->nationality;
                $addmission->home_town = $this->home_town;
                $addmission->first_language = $this->first_language;
                $addmission->previous_school = $this->previous_school;
                $addmission->previous_class = $this->previous_class;
                $addmission->passport_picture = $passport_picture_name;

                // Parent information
                $addmission->father_name = $this->father_name;
                $addmission->father_email = $this->father_email;
                $addmission->father_phone_number = $this->father_phone_number;
                $addmission->father_occupation = $this->father_occupation;
                $addmission->father_home_digital_address = $this->father_home_digital_address;

                $addmission->mother_name = $this->mother_name;
                $addmission->mother_email = $this->mother_email;
                $addmission->mother_phone_number = $this->mother_phone_number;
                $addmission->mother_occupation = $this->mother_occupation;
                $addmission->mother_home_digital_address = $this->mother_home_digital_address;

                $addmission->guardian_name = $this->guardian_name;
                $addmission->guardian_email = $this->guardian_email;
                $addmission->guardian_phone_number = $this->guardian_phone_number;
                $addmission->guardian_occupation = $this->guardian_occupation;
                $addmission->guardian_home_digital_address = $this->guardian_home_digital_address;
                $addmission->guardian_relation = $this->guardian_relation;

                $addmission->parent_staff = $this->parent_staff;

                // for Staff Only
                $addmission->personnel_number = $this->personnel_number;
                $addmission->unit_section_department = $this->unit_section_department;
                $addmission->registered_biological_ward = $this->registered_biological_ward;
                $addmission->registered_ward = $this->registered_ward;
                $addmission->registered_ward_explain = $this->registered_ward_explain;

                // Contact Information
                $addmission->contact_name1 = $this->contact_name1;
                $addmission->contact_phone_number1 = $this->contact_phone_number1;
                $addmission->contact_name2 = $this->contact_name2;
                $addmission->contact_phone_number2 = $this->contact_phone_number2;

                // Health Status
                $addmission->chronic_health_problem = $this->chronic_health_problem;
                $addmission->chp_report = $this->chp_report;
                $addmission->diagnose_physical_challenge = $this->diagnose_physical_challenge;
                $addmission->dpc_report = $this->dpc_report;

                // disciplinary report
                $addmission->disciplinary_problem = $this->disciplinary_problem;

                // significant information
                $addmission->athletics1 = $this->athletics1;
                $addmission->athletics2 = $this->athletics2;
                $addmission->games1 = $this->games1;
                $addmission->games2 = $this->games2;
                $addmission->hobbies1 = $this->hobbies1;
                $addmission->hobbies2 = $this->hobbies2;
                $addmission->academic_achievement1 = $this->academic_achievement1;
                $addmission->academic_achievement2 = $this->academic_achievement2;

                // development Development
                $addmission->neatness = $this->neatness;
                $addmission->honesty = $this->honesty;
                $addmission->emotinal_control = $this->emotinal_control;
                $addmission->friendliness = $this->friendliness;
                $addmission->work_habits = $this->work_habits;

                // Status
                $addmission->campus = $campus;
                $addmission->status = 'submit';
                $addmission->save();
            } else {
                Addmission::create([
                    'addmission_number' => $addmission_number,
                    'first_name' => $this->first_name,
                    'surname' => $this->surname,
                    'other_name' => $this->other_name,
                    'gender' => $this->gender,
                    'birthdate' => $this->birthdate,
                    'birthplace' => $this->birthplace,
                    'religion' => $this->religion,
                    'nationality' => $this->nationality,
                    'home_town' => $this->home_town,
                    'first_language' => $this->first_language,
                    'previous_school' => $this->previous_school,
                    'previous_class' => $this->previous_class,
                    'passport_picture' => $passport_picture_name,

                    // Parent information
                    'father_name' => $this->father_name,
                    'father_email' => $this->father_email,
                    'father_phone_number' => $this->father_phone_number,
                    'father_occupation' => $this->father_occupation,
                    'father_home_digital_address' => $this->father_home_digital_address,

                    'mother_name' => $this->mother_name,
                    'mother_email' => $this->mother_email,
                    'mother_phone_number' => $this->mother_phone_number,
                    'mother_occupation' => $this->mother_occupation,
                    'mother_home_digital_address' => $this->mother_home_digital_address,

                    'guardian_name' => $this->guardian_name,
                    'guardian_email' => $this->guardian_email,
                    'guardian_phone_number' => $this->guardian_phone_number,
                    'guardian_occupation' => $this->guardian_occupation,
                    'guardian_home_digital_address' => $this->guardian_home_digital_address,
                    'guardian_relation' => $this->guardian_relation,

                    'parent_staff' => $this->parent_staff,

                    // for Staff Only
                    'personnel_number' => $this->personnel_number,
                    'unit_section_department' => $this->unit_section_department,
                    'registered_biological_ward' => $this->registered_biological_ward,
                    'registered_ward' => $this->registered_ward,
                    'registered_ward_explain' => $this->registered_ward_explain,

                    // Contact Information
                    'contact_name1' => $this->contact_name1,
                    'contact_phone_number1' => $this->contact_phone_number1,
                    'contact_name2' => $this->contact_name2,
                    'contact_phone_number2' => $this->contact_phone_number2,

                    // Health Status
                    'chronic_health_problem' => $this->chronic_health_problem,
                    'chp_report' => $this->chp_report,
                    'diagnose_physical_challenge' => $this->diagnose_physical_challenge,
                    'dpc_report' => $this->dpc_report,

                    // disciplinary report
                    'disciplinary_problem' => $this->disciplinary_problem,

                    // significant information
                    'athletics1' => $this->athletics1,
                    'athletics2' => $this->athletics2,
                    'games1' => $this->games1,
                    'games2' => $this->games2,
                    'hobbies1' => $this->hobbies1,
                    'hobbies2' => $this->hobbies2,
                    'academic_achievement1' => $this->academic_achievement1,
                    'academic_achievement2' => $this->academic_achievement2,

                    // development Development
                    'neatness' => $this->neatness,
                    'honesty' => $this->honesty,
                    'emotinal_control' => $this->emotinal_control,
                    'friendliness' => $this->friendliness,
                    'work_habits' => $this->work_habits,

                    // status
                    'campus' => $campus,
                    'status' => 'submit'
                ]);
            }
            // redirect to the show and print
            session()->flash('message', 'Addimssion Details was successfull saved!');
            return redirect()->route('voucher.index');
        } catch (Exception $e) {
            $message = $e->getMessage();
            $this->addError('Exception Message: ', $message);
            $this->notification()->error(
                'Error !!!',
                'Exception Message: ' . $message,
            );
        }
    }


    public function getSelectedServiceProperty()
    {
        if (!$this->parent_staff == 'staff') {
            return False;
        }
        return True;
    }

    public function render()
    {
        return view('livewire.voucher.form');
    }
}