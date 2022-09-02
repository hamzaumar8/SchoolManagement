<?php

namespace App\Http\Livewire\Admin\Students;


use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $currentStep = 1, $successMsg = '';

    public $first_name, $surname, $other_name, $gender, $birthdate, $birthplace, $religion, $nationality, $home_town, $home_digital_address, $postal_address, $first_language, $previous_school, $email, $class_id, $class_type, $term, $accomodation_type, $phone, $date_admitted, $picture, $hpa;

    public $father_full_name, $father_email, $father_phone_number, $father_occupation, $father_home_digital_address, $father_postal_address, $father_relation, $father_picture, $mother_full_name, $mother_email, $mother_phone_number, $mother_occupation, $mother_home_digital_address, $mother_postal_address, $mother_relation, $mother_picture, $guardian_full_name, $guardian_email, $guardian_phone_number, $guardian_occupation, $guardian_home_digital_address, $guardian_postal_address, $guardian_relation, $guardian_picture;

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
            'father_full_name' => 'required',
            'father_email' => 'required',
            'father_phone_number' => 'required',
            'father_occupation' => 'required',
            'father_home_digital_address' => 'required',
            'father_postal_address' => 'required',
            'father_relation' => 'required',
            'father_picture' => 'nullable|mimes:webp,jpeg,jpg,png',
            // Mother
            'mother_full_name' => 'required',
            'mother_email' => 'required',
            'mother_phone_number' => 'required',
            'mother_occupation' => 'required',
            'mother_home_digital_address' => 'required',
            'mother_postal_address' => 'required',
            'mother_relation' => 'required',
            'mother_picture' => 'nullable|mimes:webp,jpeg,jpg,png',
            // Mother
            'guardian_full_name' => 'required',
            'guardian_email' => 'required',
            'guardian_phone_number' => 'required',
            'guardian_occupation' => 'required',
            'guardian_home_digital_address' => 'required',
            'guardian_postal_address' => 'required',
            'guardian_relation' => 'required',
            'guardian_picture' => 'nullable|mimes:webp,jpeg,jpg,png',
        ];
    }

    public function save()
    {
        $this->validate();
    }


    public function render()
    {


        return view('livewire.admin.students.create');
    }
}