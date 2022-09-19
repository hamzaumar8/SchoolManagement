<x-voucher-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!--  -->
                    @if(Session::has('message'))
                    <x-alert-success>{{Session::get('message')}}</x-alert-success>
                    @endif
                    <!--  -->

                    <!-- Html Print Component -->
                    <x-html-print>
                        <div class="text-sm">
                            <div class="grid grid-cols-4 items-center pb-8">
                                <div class="flex justify-center items-center">
                                    <x-application-logo class="h-40" />
                                </div>
                                <div class="col-span-2 text-center uppercase">
                                    <h6 class="font-bold">University of Cape Coast Basic Junior High School
                                    </h6>
                                    <h6 class="underline font-bold">Admission Form
                                    </h6>
                                    <h6 class="underline font-bold">Addmission Number:
                                        {{$addmission->addmission_number}}
                                    </h6>
                                </div>
                                <div class="flex justify-center items-center">
                                    <img src="{{asset('assets/img/addmission')}}/{{$addmission->passport_picture}}"
                                        class="h-40" alt="">
                                </div>
                            </div>
                            <table
                                class="w-full border border-spacing-1 border-separate border-black uppercase text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th nowrap="nowrap">1. Student Details</th>

                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="15%" nowrap="nowrap">First Name:</th>
                                        <td width="35%">{{$addmission->first_name}}</td>
                                        <th width="15%" nowrap="nowrap">Surname:</th>
                                        <td width="35%">{{$addmission->surname}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-t-0 border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="15%" nowrap="nowrap">Other Name(s) :</th>
                                        <td width="35%">{{$addmission->other_name}}</td>
                                        <th width="15%" nowrap="nowrap">Gender :</th>
                                        <td width="35%">{{$addmission->gender}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-t-0 border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="15%" nowrap="nowrap">Birth Date :</th>
                                        <td width="35%">{{$addmission->birthdate}}</td>
                                        <th width="15%" nowrap="nowrap">Birth Place :</th>
                                        <td width="35%">{{$addmission->birthplace}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-t-0 border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="15%" nowrap="nowrap">Religion :</th>
                                        <td width="35%">{{$addmission->religion}}</td>
                                        <th width="15%" nowrap="nowrap">Nationality :</th>
                                        <td width="35%">{{$addmission->nationality}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-t-0 border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="15%" nowrap="nowrap">Home Town :</th>
                                        <td width="35%">{{$addmission->home_town}}</td>
                                        <th width="15%" nowrap="nowrap">First Language :</th>
                                        <td width="35%">{{$addmission->first_language}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-t-0 border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="15%" nowrap="nowrap">Previous School :</th>
                                        <td width="35%">{{$addmission->previous_school}}</td>
                                        <th width="15%" nowrap="nowrap">Previous Class :</th>
                                        <td width="35%">{{$addmission->previous_class}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <br>
                            <table
                                class="w-full border border-spacing-1 border-separate border-black uppercase text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th nowrap="nowrap">2. Particulars of Parent / Guardian Details</th>

                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="15%" nowrap="nowrap">Father's Name :</th>
                                        <td width="35%">{{$addmission->father_name}}</td>
                                        <th width="15%" nowrap="nowrap">Father's Email :</th>
                                        <td width="35%">{{$addmission->father_email}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-t-0 border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="15%" nowrap="nowrap">Father's Phone Number :</th>
                                        <td width="35%">{{$addmission->father_phone_number}}</td>
                                        <th width="15%" nowrap="nowrap">Father's Occupation:</th>
                                        <td width="35%">{{$addmission->father_occupation}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-t-0 border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="15%" nowrap="nowrap">Father's Home / Digital Address :</th>
                                        <td width="35%">{{$addmission->father_home_digital_address}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="15%" nowrap="nowrap">Mother's Name :</th>
                                        <td width="35%">{{$addmission->mother_name}}</td>
                                        <th width="15%" nowrap="nowrap">Mother's Email :</th>
                                        <td width="35%">{{$addmission->mother_email}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-t-0 border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="15%" nowrap="nowrap">Mother's Phone Number :</th>
                                        <td width="35%">{{$addmission->mother_phone_number}}</td>
                                        <th width="15%" nowrap="nowrap">Mother's Occupation:</th>
                                        <td width="35%">{{$addmission->mother_occupation}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-t-0 border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="15%" nowrap="nowrap">Mother's Home / Digital Address :</th>
                                        <td width="35%">{{$addmission->mother_home_digital_address}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            @if($addmission->guardian_name)
                            <table
                                class="w-full border border-spacing-1 border-separate border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="15%" nowrap="nowrap">Guardian's Name :</th>
                                        <td width="35%">{{$addmission->guardian_name}}</td>
                                        <th width="15%" nowrap="nowrap">Guardian's Email :</th>
                                        <td width="35%">{{$addmission->guardian_email}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-t-0 border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="15%" nowrap="nowrap">Guardian's Phone Number :</th>
                                        <td width="35%">{{$addmission->guardian_phone_number}}</td>
                                        <th width="15%" nowrap="nowrap">Guardian's Occupation:</th>
                                        <td width="35%">{{$addmission->guardian_occupation}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-t-0 border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="15%" nowrap="nowrap">Guardian's Home / Digital Address :</th>
                                        <td width="35%">{{$addmission->guardian_home_digital_address}}</td>
                                        <th width="15%" nowrap="nowrap">Guardian's Relationship:</th>
                                        <td width="35%">{{$addmission->guardian_relation}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            @endif
                            <table
                                class="w-full border border-spacing-1 border-separate border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="15%" nowrap="nowrap">Is Parant / Guardian A staff or Non-Staff Of Ucc
                                            :</th>
                                        <td width="35%" class="uppercase">{{$addmission->parent_staff}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <br>

                            <!--  -->
                            @if($addmission->parent_staff == 'staff')
                            <table
                                class="w-full border border-spacing-1 border-separate border-black uppercase text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th nowrap="nowrap">For U.c.c Staff Only</th>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="15%" nowrap="nowrap">Personnel Number :</th>
                                        <td width="35%">{{$addmission->personnel_number}}</td>
                                        <th width="15%" nowrap="nowrap">Unit / Section / Department :</th>
                                        <td width="35%">{{$addmission->unit_section_department}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-t-0 border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="15%" nowrap="nowrap">Is pupil your registered biological child with
                                            your personal records?
                                            :</th>
                                        <td width="35%" class="uppercase">{{$addmission->registered_biological_ward}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-t-0 border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="15%" nowrap="nowrap">Is pupil your registered ward?
                                            :</th>
                                        <td width="35%" class="uppercase">{{$addmission->registered_ward}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-t-0 border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="10%" nowrap="nowrap">Explain (If yes)
                                            :</th>
                                        <td width="90%" class="uppercase">{{$addmission->registered_ward_explain}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br>
                            @endif
                            <!--  -->
                            <table
                                class="w-full border border-spacing-1 border-separate border-black uppercase text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th nowrap="nowrap">3. Health Status</th>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="15%" nowrap="nowrap">Is the applicant having any serious / chronic
                                            health? :</th>
                                        <td width="35%">{{$addmission->chronic_health_problem}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-t-0 border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="15%" nowrap="nowrap">Has the child been diagnosed of having anu
                                            physical challenges? :</th>
                                        <td width="35%">{{$addmission->diagnose_physical_challenge}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <br>
                            <!--  -->
                            <table
                                class="w-full border border-spacing-1 border-separate border-black uppercase text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th nowrap="nowrap">4. Disciplinary Problem (s)</th>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="15%" nowrap="nowrap">Has the applicant been involved in any
                                            indiscipline at home/school? :</th>
                                        <td width="35%">{{$addmission->disciplinary_problem}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <br>
                            <!--  -->
                            <table
                                class="w-full border border-spacing-1 border-separate border-black uppercase text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th nowrap="nowrap">5. Significant information about Pupil</th>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="15%" nowrap="nowrap"> Athletics : List 2 sporting events of pupil's
                                            interest / capabilities</th>
                                        <td width="35%"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-t-0 border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="2%" nowrap="nowrap" class="uppercase"> i :</th>
                                        <td>{{$addmission->athletics1}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-t-0 border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="2%" nowrap="nowrap" class="uppercase"> ii :</th>
                                        <td>{{$addmission->athletics2}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="15%" nowrap="nowrap"> Games : List 2 games of pupil's interest</th>
                                        <td width="35%"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-t-0 border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="2%" nowrap="nowrap" class="uppercase"> i :</th>
                                        <td>{{$addmission->games1}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-t-0 border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="2%" nowrap="nowrap" class="uppercase"> ii :</th>
                                        <td>{{$addmission->games2}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="15%" nowrap="nowrap"> Hobbies : List any 2 of childs's interest</th>
                                        <td width="35%"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-t-0 border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="2%" nowrap="nowrap" class="uppercase"> i :</th>
                                        <td>{{$addmission->hobbies1}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-t-0 border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="2%" nowrap="nowrap" class="uppercase"> ii :</th>
                                        <td>{{$addmission->hobbies2}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-black text-left px-2 py-1 uppercase">
                                <tbody>
                                    <tr>
                                        <th width="15%" nowrap="nowrap"> Academic / co-curricular Achievements (if any)
                                        </th>
                                        <td width="35%"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-t-0 border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="2%" nowrap="nowrap" class="uppercase"> i :</th>
                                        <td>{{$addmission->academic_achievement1}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-t-0 border-black text-left px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="2%" nowrap="nowrap" class="uppercase"> ii :</th>
                                        <td>{{$addmission->academic_achievement2}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <br>
                            <!--  -->
                            <table
                                class="w-full border border-spacing-1 border-separate border-black uppercase text-center px-2 py-1">
                                <thead>
                                    <tr>
                                        <th width="40%" nowrap="nowrap" class="text-left">Trait</th>
                                        <th width="20%" nowrap="nowrap">A</th>
                                        <th width="20%" nowrap="nowrap">B</th>
                                        <th width="20%" nowrap="nowrap">C</th>
                                    </tr>
                                </thead>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-black uppercase text-center px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="40%" nowrap="nowrap" class="text-left">
                                            Neatness
                                        </th>
                                        <td width="20%">
                                            <div
                                                class="border border-black p-0.5 relative inline-block h-[20px] w-[20px]">
                                                <i class="{{ $addmission->neatness == 'A' ? 'fas fa-check' : '' }}"></i>
                                            </div>
                                        </td>
                                        <td width="20%">
                                            <div
                                                class="border border-black p-0.5 relative inline-block h-[20px] w-[20px]">
                                                <i class="{{ $addmission->neatness == 'B' ? 'fas fa-check' : '' }}"></i>
                                            </div>
                                        </td>
                                        <td width="20%">
                                            <div
                                                class="border border-black p-0.5 relative inline-block h-[20px] w-[20px]">
                                                <i class="{{ $addmission->neatness == 'C' ? 'fas fa-check' : '' }}"></i>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-t-0 border-black uppercase text-center px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="40%" nowrap="nowrap" class="text-left">
                                            Honesty
                                        </th>
                                        <td width="20%">
                                            <div
                                                class="border border-black p-0.5 relative inline-block h-[20px] w-[20px]">
                                                <i class="{{ $addmission->honesty == 'A' ? 'fas fa-check' : '' }}"></i>
                                            </div>
                                        </td>
                                        <td width="20%">
                                            <div
                                                class="border border-black p-0.5 relative inline-block h-[20px] w-[20px]">
                                                <i class="{{ $addmission->honesty == 'B' ? 'fas fa-check' : '' }}"></i>
                                            </div>
                                        </td>
                                        <td width="20%">
                                            <div
                                                class="border border-black p-0.5 relative inline-block h-[20px] w-[20px]">
                                                <i class="{{ $addmission->honesty == 'C' ? 'fas fa-check' : '' }}"></i>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-t-0 border-black uppercase text-center px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="40%" nowrap="nowrap" class="text-left">
                                            Emotional
                                            Control
                                        <td width="20%">
                                            <div class="border border-black p-0.5 inline-block h-[20px] w-[20px]">
                                                <i
                                                    class="{{ $addmission->emotinal_control == 'A' ? 'fas fa-check' : '' }}">
                                                </i>
                                            </div>
                                        </td>
                                        <td width="20%">
                                            <div
                                                class="border border-black p-0.5 relative inline-block h-[20px] w-[20px]">
                                                <i
                                                    class="{{ $addmission->emotinal_control == 'B' ? 'fas fa-check' : '' }}"></i>
                                            </div>
                                        </td>
                                        <td width="20%">
                                            <div
                                                class="border border-black p-0.5 relative inline-block h-[20px] w-[20px]">
                                                <i
                                                    class="{{ $addmission->emotinal_control == 'C' ? 'fas fa-check' : '' }}"></i>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-t-0 border-black uppercase text-center px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="40%" nowrap="nowrap" class="text-left">
                                            Friendliness</th>
                                        <td width="20%">
                                            <div
                                                class="border border-black p-0.5 relative inline-block h-[20px] w-[20px]">
                                                <i
                                                    class="{{ $addmission->friendliness == 'A' ? 'fas fa-check' : '' }}"></i>
                                            </div>
                                        </td>
                                        <td width="20%">
                                            <div
                                                class="border border-black p-0.5 relative inline-block h-[20px] w-[20px]">
                                                <i
                                                    class="{{ $addmission->friendliness == 'B' ? 'fas fa-check' : 'block !h-1.5 w-[14px]' }}"></i>
                                            </div>
                                        </td>
                                        <td width="20%">
                                            <div
                                                class="border border-black p-0.5 relative inline-block h-[20px] w-[20px]">
                                                <i
                                                    class="{{ $addmission->friendliness == 'C' ? 'fas fa-check' : '' }}"></i>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table
                                class="w-full border border-spacing-1 border-separate border-t-0 border-black uppercase text-center px-2 py-1">
                                <tbody>
                                    <tr>
                                        <th width="40%" nowrap="nowrap" class="text-left">
                                            Work Habits
                                        </th>
                                        <td width="20%">
                                            <div
                                                class="border border-black p-0.5 relative inline-block h-[20px] w-[20px]">
                                                <i
                                                    class="{{ $addmission->work_habits == 'A' ? 'fas fa-check' : '' }}"></i>
                                            </div>
                                        </td>
                                        <td width="20%">
                                            <div
                                                class="border border-black p-0.5 relative inline-block h-[20px] w-[20px]">
                                                <i
                                                    class="{{ $addmission->work_habits == 'B' ? 'fas fa-check' : '' }}"></i>
                                            </div>
                                        </td>
                                        <td width="20%">
                                            <div
                                                class="border border-black p-0.5 relative inline-block h-[20px] w-[20px]">
                                                <i
                                                    class="{{ $addmission->work_habits == 'C' ? 'fas fa-check' : '' }}"></i>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </x-html-print>
                </div>
            </div>
        </div>
    </div>
</x-voucher-layout>