<?php

namespace App\Http\Livewire\Voucher;

use App\Models\Addmission;
use Livewire\Component;

class Form extends Component
{
    public $first_name, $surname, $other_name, $gender, $birthdate, $birthplace, $religion, $nationality, $home_town, $home_digital_address, $postal_address, $first_language, $previous_school, $email, $class_id, $class_type, $term, $accomodation_type, $phone, $date_admitted, $picture, $hpa;

    public $father_name, $father_email, $father_phone_number, $father_occupation, $father_home_digital_address, $father_postal_address, $father_relation, $father_picture, $mother_name, $mother_email, $mother_phone_number, $mother_occupation, $mother_home_digital_address, $mother_postal_address, $mother_relation, $mother_picture, $guardian_name, $guardian_email, $guardian_phone_number, $guardian_occupation, $guardian_home_digital_address, $guardian_postal_address, $guardian_relation, $guardian_picture;

    public $contact_name1, $contact_phone_number1, $contact_name2, $contact_phone_number2;

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
            'date_admitted' => 'required|date',
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
            'date_admitted' => $this->date_admitted,
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