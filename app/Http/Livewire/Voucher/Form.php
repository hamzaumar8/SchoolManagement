<?php

namespace App\Http\Livewire\Voucher;

use App\Models\Addmission;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;

    public $first_name, $surname, $other_name, $gender, $birthdate, $birthplace, $religion, $nationality, $home_town, $home_digital_address, $postal_address, $first_language, $previous_school, $email, $class_id, $class_type, $term, $accomodation_type, $phone, $picture, $hpa;
    public $father_name, $father_email, $father_phone_number, $father_occupation, $father_home_digital_address, $father_postal_address, $father_relation, $father_picture, $mother_name, $mother_email, $mother_phone_number, $mother_occupation, $mother_home_digital_address, $mother_postal_address, $mother_relation, $mother_picture, $guardian_name, $guardian_email, $guardian_phone_number, $guardian_occupation, $guardian_home_digital_address, $guardian_postal_address, $guardian_relation, $guardian_picture;
    public $contact_name1, $contact_phone_number1, $contact_name2, $contact_phone_number2;

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
            $this->home_digital_address = $addmission->home_digital_address;
            $this->first_language = $addmission->first_language;
            $this->postal_address = $addmission->postal_address;
            $this->previous_school = $addmission->previous_school;
            $this->email = $addmission->email;
            $this->class_id = $addmission->class_id;
            $this->class_type = $addmission->class_type;
            $this->term = $addmission->term;
            $this->accomodation_type = $addmission->accomodation_type;
            $this->phone = $addmission->phone;
            $this->hpa = $addmission->hpa;
            $this->picture = $addmission->picture;
            // Father
            $this->father_name = $addmission->father_name;
            $this->father_email = $addmission->father_email;
            $this->father_phone_number = $addmission->father_phone_number;
            $this->father_occupation = $addmission->father_occupation;
            $this->father_home_digital_address = $addmission->father_home_digital_address;
            $this->father_postal_address = $addmission->father_postal_address;
            $this->father_picture = $addmission->father_picture;
            // Mother
            $this->mother_name = $addmission->mother_name;
            $this->mother_email = $addmission->mother_email;
            $this->mother_phone_number = $addmission->mother_phone_number;
            $this->mother_occupation = $addmission->mother_occupation;
            $this->mother_home_digital_address = $addmission->mother_home_digital_address;
            $this->mother_postal_address = $addmission->mother_postal_address;
            $this->mother_picture = $addmission->mother_picture;
            // Guardian
            $this->guardian_name = $addmission->guardian_name;
            $this->guardian_email = $addmission->guardian_email;
            $this->guardian_phone_number = $addmission->guardian_phone_number;
            $this->guardian_occupation = $addmission->guardian_occupation;
            $this->guardian_home_digital_address = $addmission->guardian_home_digital_address;
            $this->guardian_postal_address = $addmission->guardian_postal_address;
            $this->guardian_relation = $addmission->guardian_relation;
            $this->guardian_picture = $addmission->guardian_picture;
            // emergency
            $this->contact_name1 = $addmission->contact_name1;
            $this->contact_phone_number1 = $addmission->contact_phone_number1;
            $this->contact_name2 = $addmission->contact_name2;
            $this->contact_phone_number2 = $addmission->contact_phone_number2;
        }
    }
    protected function rules()
    {
        return [
            'first_name' => 'required|max:20',
            'surname' => 'required|max:20',
            'other_name' => 'nullable|max:20',
            'gender' => 'required|string',
            'birthdate' => 'required|date',
            'birthplace' => 'required|max:255',
            'religion' => 'required|max:255',
            'nationality' => 'required|max:50',
            'home_town' => 'required|max:150',
            'home_digital_address' => 'required|max:150',
            'first_language' => 'required|max:50',
            'postal_address' => 'nullable|max:50',
            'previous_school' => 'nullable|string|max:255',
            'email' => 'nullable|string|email|max:255|unique:students',
            'class_id' => 'required',
            'class_type' => 'required',
            'term' => 'required',
            'accomodation_type' => 'required|string',
            'phone' => 'required|max:15',
            'hpa' => 'required|string',
            'picture' => 'required|mimes:webp,jpeg,jpg,png',
            // Father
            'father_name' => 'required',
            'father_email' => 'required|string|email|max:255',
            'father_phone_number' => 'required',
            'father_occupation' => 'required',
            'father_home_digital_address' => 'required',
            'father_postal_address' => 'required',
            'father_picture' => 'nullable|mimes:webp,jpeg,jpg,png',
            // Mother
            'mother_name' => 'required',
            'mother_email' => 'required|string|email|max:255',
            'mother_phone_number' => 'required',
            'mother_occupation' => 'required',
            'mother_home_digital_address' => 'required',
            'mother_postal_address' => 'required',
            'mother_picture' => 'nullable|mimes:webp,jpeg,jpg,png',
            // Guardian
            'guardian_name' => 'nullable|string',
            'guardian_email' => 'nullable||string|email|max:255',
            'guardian_phone_number' => 'nullable|string',
            'guardian_occupation' => 'nullable|string',
            'guardian_home_digital_address' => 'nullable|string',
            'guardian_postal_address' => 'nullable|string',
            'guardian_relation' => 'nullable|string',
            'guardian_picture' => 'nullable|mimes:webp,jpeg,jpg,png',
            // emergency
            'contact_name1' => 'required|string',
            'contact_phone_number1' => 'required|string',
            'contact_name2' => 'required|nullable|string',
            'contact_phone_number2' => 'required|nullable|string',
        ];
    }

    public function save()
    {
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
            $addmission->home_digital_address = $this->home_digital_address;
            $addmission->first_language = $this->first_language;
            $addmission->postal_address = $this->postal_address;
            $addmission->previous_school = $this->previous_school;
            $addmission->email = $this->email;
            $addmission->class_id = $this->class_id;
            $addmission->class_type = $this->class_type;
            $addmission->term = $this->term;
            $addmission->accomodation_type = $this->accomodation_type;
            $addmission->phone = $this->phone;
            $addmission->hpa = $this->hpa;
            $addmission->picture = $this->picture;
            // Father
            $addmission->father_name = $this->father_name;
            $addmission->father_email = $this->father_email;
            $addmission->father_phone_number = $this->father_phone_number;
            $addmission->father_occupation = $this->father_occupation;
            $addmission->father_home_digital_address = $this->father_home_digital_address;
            $addmission->father_postal_address = $this->father_postal_address;
            $addmission->father_picture = $this->father_picture;
            // Mother
            $addmission->mother_name = $this->mother_name;
            $addmission->mother_email = $this->mother_email;
            $addmission->mother_phone_number = $this->mother_phone_number;
            $addmission->mother_occupation = $this->mother_occupation;
            $addmission->mother_home_digital_address = $this->mother_home_digital_address;
            $addmission->mother_postal_address = $this->mother_postal_address;
            $addmission->mother_picture = $this->mother_picture;
            // Guardian
            $addmission->guardian_name = $this->guardian_name;
            $addmission->guardian_email = $this->guardian_email;
            $addmission->guardian_phone_number = $this->guardian_phone_number;
            $addmission->guardian_occupation = $this->guardian_occupation;
            $addmission->guardian_home_digital_address = $this->guardian_home_digital_address;
            $addmission->guardian_postal_address = $this->guardian_postal_address;
            $addmission->guardian_relation = $this->guardian_relation;
            $addmission->guardian_picture = $this->guardian_picture;
            // emergency
            $addmission->contact_name1 = $this->contact_name1;
            $addmission->contact_phone_number1 = $this->contact_phone_number1;
            $addmission->contact_name2 = $this->contact_name2;
            $addmission->contact_phone_number2 = $this->contact_phone_number2;

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
                'home_digital_address' => $this->home_digital_address,
                'first_language' => $this->first_language,
                'postal_address' => $this->postal_address,
                'previous_school' => $this->previous_school,
                'email' => $this->email,
                'class_id' => $this->class_id,
                'class_type' => $this->class_type,
                'term' => $this->term,
                'accomodation_type' => $this->accomodation_type,
                'phone' => $this->phone,
                'date_admitted' => session()->get('VoucherUser')['created_at']->format('Y-m-d'),
                'hpa' => $this->hpa,
                'picture' => $this->picture,
                // Father
                'father_name' => $this->father_name,
                'father_email' => $this->father_email,
                'father_phone_number' => $this->father_phone_number,
                'father_occupation' => $this->father_occupation,
                'father_home_digital_address' => $this->father_home_digital_address,
                'father_postal_address' => $this->father_postal_address,
                'father_picture' => $this->father_picture,
                // Mother
                'mother_name' => $this->mother_name,
                'mother_email' => $this->mother_email,
                'mother_phone_number' => $this->mother_phone_number,
                'mother_occupation' => $this->mother_occupation,
                'mother_home_digital_address' => $this->mother_home_digital_address,
                'mother_postal_address' => $this->mother_postal_address,
                'mother_picture' => $this->mother_picture,
                // Guardian
                'guardian_name' => $this->guardian_name,
                'guardian_email' => $this->guardian_email,
                'guardian_phone_number' => $this->guardian_phone_number,
                'guardian_occupation' => $this->guardian_occupation,
                'guardian_home_digital_address' => $this->guardian_home_digital_address,
                'guardian_postal_address' => $this->guardian_postal_address,
                'guardian_relation' => $this->guardian_relation,
                'guardian_picture' => $this->guardian_picture,
                // emergency
                'contact_name1' => $this->contact_name1,
                'contact_phone_number1' => $this->contact_phone_number1,
                'contact_name2' => $this->contact_name2,
                'contact_phone_number2' => $this->contact_phone_number2,
            ]);
        }
        session()->flash('message', 'Addimssion Details was successfull saved!');
        return redirect()->route('voucher.index');
    }

    public function submit()
    {
        $this->validate();
        dd('hamza');
        Addmission::create([
            'first_name' => $this->first_name,
            'surname' => $this->surname,
            'other_name' => $this->other_name,
            'gender' => $this->gender,
            'birthdate' => $this->birthdate,
            'birthplace' => $this->birthplace,
            'religion' => $this->religion,
            'nationality' => $this->nationality,
            'home_town' => $this->home_town,
            'home_digital_address' => $this->home_digital_address,
            'first_language' => $this->first_language,
            'postal_address' => $this->postal_address,
            'previous_school' => $this->previous_school,
            'email' => $this->email,
            'class_id' => $this->class_id,
            'class_type' => $this->class_type,
            'term' => $this->term,
            'accomodation_type' => $this->accomodation_type,
            'phone' => $this->phone,
            'date_admitted' => session()->get('VoucherUser')['created_at']->format('Y-m-d'),
            'hpa' => $this->hpa,
            'picture' => $this->picture,
            // Father
            'father_name' => $this->father_name,
            'father_email' => $this->father_email,
            'father_phone_number' => $this->father_phone_number,
            'father_occupation' => $this->father_occupation,
            'father_home_digital_address' => $this->father_home_digital_address,
            'father_postal_address' => $this->father_postal_address,
            'father_picture' => $this->father_picture,
            // Mother
            'mother_name' => $this->mother_name,
            'mother_email' => $this->mother_email,
            'mother_phone_number' => $this->mother_phone_number,
            'mother_occupation' => $this->mother_occupation,
            'mother_home_digital_address' => $this->mother_home_digital_address,
            'mother_postal_address' => $this->mother_postal_address,
            'mother_picture' => $this->mother_picture,
            // Guardian
            'guardian_name' => $this->guardian_name,
            'guardian_email' => $this->guardian_email,
            'guardian_phone_number' => $this->guardian_phone_number,
            'guardian_occupation' => $this->guardian_occupation,
            'guardian_home_digital_address' => $this->guardian_home_digital_address,
            'guardian_postal_address' => $this->guardian_postal_address,
            'guardian_relation' => $this->guardian_relation,
            'guardian_picture' => $this->guardian_picture,
            // emergency
            'contact_name1' => $this->contact_name1,
            'contact_phone_number1' => $this->contact_phone_number1,
            'contact_name2' => $this->contact_name2,
            'contact_phone_number2' => $this->contact_phone_number2,
        ]);
    }
    public function render()
    {
        return view('livewire.voucher.form');
    }
}