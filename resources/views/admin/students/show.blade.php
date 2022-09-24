<x-app-layout>
    <x-table-card header="Details of {{$student->first_name}} {{$student->other_name}} {{$student->surname}}"
        back="{{ route('students.index') }}">
        <div class="w-full flex flex-col bg-white by-5">
            <div class="py-2.5 flex justify-between items-center border-b  dark:border-0 ">
                <h3 class="font-bold whitespace-normal text-md uppercase text-secondary-700 dark:text-secondary-400">
                    Student Details</h3>
            </div>
            <div class="py-5 text-secondary-700 grow dark:text-secondary-400">
                <div class="flex">
                    <div class="w-[250px] flex items-center justify-center mr-4">
                        <img src="{{asset('assets/img/addmission')}}/{{$student->addmission->passport_picture}}"
                            class="h-40" alt="">
                    </div>
                    <div class="w-full">
                        <div class="grid grid-cols-2 py-2.5  border-b">
                            <div>
                                <strong class="mr-4">Addmission Number:</strong>
                                <span>
                                    <a class="underline"
                                        href="{{ route('addmissions.show', $student->addmission_id) }}">{{$student->addmission_number}}</a>
                                </span>
                            </div>
                            <div>
                                <strong class=" mr-4">Index Number:</strong>
                                <span>{{$student->index_number}}</span>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 py-2.5  border-b">
                            <div>
                                <strong class="mr-4">First Name:</strong>
                                <span>{{$student->first_name}}</span>
                            </div>
                            <div>
                                <strong class="mr-4">Surname:</strong>
                                <span>{{$student->addmission->surname}}</span>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 py-2.5  border-b">
                            <div>
                                <strong class="mr-4">Other Name(s) :</strong>
                                <span>{{$student->other_name}}</span>
                            </div>
                            <div>
                                <strong class="mr-4">Gender:</strong>
                                <span class="capitalize">{{$student->gender}}</span>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 py-2.5  border-b">
                            <div>
                                <strong class="mr-4">Birth Date :</strong>
                                <span>{{$student->birthdate}}</span>
                            </div>
                            <div>
                                <strong class="mr-4">Campus:</strong>
                                <span class="capitalize">{{$student->campus}} campus</span>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 py-2.5  border-b">
                            <div>
                                <strong class="mr-4">Class :</strong>
                                <span>{{$student->class->name}}</span>
                            </div>
                            <div>
                                <strong class="mr-4">Class Type:</strong>
                                <span class="capitalize">{{$student->class_type}} </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-5 py-5">
            @foreach($student->parentguardian as $parentguardian)
            <x-card title="Parent / Guardian Details">
                <div class="pb-2.5 border-b">
                    <strong class="mr-4">Full Name :</strong>
                    <span>{{$parentguardian->full_name}}</span>
                </div>
                <div class="py-2.5 border-b">
                    <strong class="mr-4">Email :</strong>
                    <span>{{$parentguardian->email}}</span>
                </div>
                <div class="py-2.5 border-b">
                    <strong class="mr-4">Phone Number :</strong>
                    <span>{{$parentguardian->phone_number}}</span>
                </div>
                <div class="py-2.5 border-b">
                    <strong class="mr-4">Occupation :</strong>
                    <span>{{$parentguardian->occupation}}</span>
                </div>
                <div class="py-2.5 border-b">
                    <strong class="mr-4">Address :</strong>
                    <span>{{$parentguardian->home_digital_address}}</span>
                </div>
                <div class="py-2.5 ">
                    <strong class="mr-4">Relation :</strong>
                    <span>{{$parentguardian->relation}}</span>
                </div>
            </x-card>
            @endforeach
        </div>

        <div class="grid grid-cols-2 gap-5 py-5">
            @foreach($student->emergencycontact as $emergencycontact)
            <x-card title="Emergrncy Contacts">
                <div class="pb-2.5 border-b">
                    <strong class="mr-4">Full Name :</strong>
                    <span>{{$emergencycontact->name}}</span>
                </div>
                <div class="py-2.5 ">
                    <strong class="mr-4">Phone Number :</strong>
                    <span>{{$emergencycontact->phone_number}}</span>
                </div>
            </x-card>
            @endforeach
        </div>




    </x-table-card>
</x-app-layout>