<x-app-layout>

    <x-table-card
        header="Attendance Summary for  Term {{Session::get('CurrTerm')['term']}} ({{Session::get('CurrTerm')['academic_year']}})">

        <!-- Html Print Component -->
        <x-html-print>
            <table class="table rounded-lg min-w-full border border-slate-200 printed">
                <thead class="border border-slate-200 ">
                    <tr class="">
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs tracking-wider whitespace-nowrap"
                            colspan="2">
                            <x-application-logo class="h-40" />
                        </th>

                        <th style="width: max-content;  cursor:pointer;"></th>

                        <th class="font-bold text-lg text-gray-900 uppercase px-2 pr-4 py-3 text-center tracking-wider whitespace-nowrap"
                            style="width: max-content;  cursor:pointer;" colspan="3">
                            <div class="">
                                <div>University Basic School - North Campus</div>
                                <div>University of Cape Coast</div>
                                <div>Cape Coast</div>
                                <div><span class="mr-2">Email:</span> vaddison@ucc.edu.gh</div>
                                <div><span class="mr-2">Mobile:</span> +233261231844</div>
                                <div><span class="mr-2">Website:</span> <a href="https://www.ucc.edu.gh"
                                        target="blank">www.ucc.edu.gh</a></div>
                            </div>
                        </th>

                        <th style="width: max-content;  cursor:pointer;"></th>

                        <th class="font-semibold px-2 py-3 !text-right tracking-wider whitespace-nowrap"
                            style="width: max-content;  cursor:pointer;" colspan="2">
                            <div class="uppercase">
                                <img src="{{asset('assets/img/addmission')}}/{{$student->addmission->passport_picture}}"
                                    class="h-40" alt="">
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody class="text-slate-800 ">
                    <tr class="table-t-r font-bold">
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-2 border-gray-700 font-bold"
                            colspan="2">
                            <span class="">
                                <div>
                                    Student Name:
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-2 border-gray-700 font-bold"
                            colspan="5">
                            <span>
                                {{$student->fullname()}}
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-2 border-gray-700">
                            <span class="">
                                Session
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border-2 border-gray-700 font-bold">
                            <span class="">
                                {{$report->term->term}}
                            </span>
                        </td>
                    </tr>

                    <tr class="table-t-r font-bold">
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-2 border-gray-700 font-bold"
                            colspan="2">
                            <span class="">
                                <div>
                                    Index Number:
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-2 border-gray-700 font-bold">
                            <span>
                                {{$student->index_number}}
                            </span>
                        </td>

                        <td></td>

                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-2 border-gray-700 font-bold"
                            colspan="2">
                            <span class="">
                                Class Enrollment
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-2 border-gray-700 font-bold">
                            <span class="">

                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-2 border-gray-700 font-bold">
                            <span class="">
                                Class Position
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border-2 border-gray-700">
                            <span class="">
                                20
                            </span>
                        </td>
                    </tr>

                    <tr class="table-t-r font-bold">
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-2 border-gray-700 font-bold"
                            colspan="2">
                            <span class="">
                                <div>
                                    Class:
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-2 border-gray-700 font-bold">
                            <span>
                                {{$report->class->name}}
                            </span>
                        </td>
                        <td></td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-2 border-gray-700 font-bold"
                            colspan="2">
                            <span class="">
                                Overall Enrollment
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-2 border-gray-700 font-bold">
                            <span class="">

                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-2 border-gray-700 font-bold">
                            <span class="">
                                Overall Position
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border-2 border-gray-700">
                            <span class="">
                                20
                            </span>
                        </td>
                    </tr>

                    <tr class="table-t-r font-bold">
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-2 border-gray-700 font-bold"
                            colspan="2">
                            <span class="">
                                <div>
                                    Academic Year:
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-2 border-gray-700 font-bold">
                            <span>
                                {{$report->term->academic_year}}
                            </span>
                        </td>
                        <td></td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-2 border-gray-700 font-bold"
                            colspan="2">
                            <span class="">
                                Vacation Date
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-2 border-gray-700 font-bold">
                            <span class="">
                                {{$report->term->end_date}}
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-2 border-gray-700 font-bold">
                            <span class="">
                                Reopen Date
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border-2 border-gray-700">
                            <span class="">

                            </span>
                        </td>
                    </tr>

                    <tr class="table-t-r">
                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap " colspan="9">
                            <span class="underline">
                                Session Report
                            </span>
                        </td>
                    </tr>
                    <tr class="table-t-r font-bold !text-center">
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-2 border-gray-700 font-bold"
                            colspan="2">
                            <span class="">
                                <div>
                                    Subjects
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-2 border-gray-700 font-bold">
                            <span>
                                Class <br>
                                Score <br>
                                50%
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-2 border-gray-700 font-bold">
                            <span>
                                Exam <br>
                                Score <br>
                                50%
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border-2 border-gray-700 font-bold">
                            <span>
                                Total <br>
                                Score <br>
                                50%
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border-2 border-gray-700 font-bold">
                            <span class="">
                                Grade
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-2 border-gray-700 font-bold">
                            <span class="">
                                Remarks
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border-2 border-gray-700" colspan="2">
                            <span class="">
                                Subject Facilitator
                            </span>
                        </td>

                    </tr>

                    <tr class="table-t-r bg-gray-300">
                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap " colspan="9">
                            <span class="">
                                <div>
                                    Core Subject
                                </div>
                            </span>
                        </td>
                    </tr>
                    @foreach($report->class->subjects as $subject)
                    {{$subject->staff}}<br>
                    <tr class="table-t-r">
                        <td class=" capitalize px-3 py-2 whitespace-nowrap  border-r border-r-gray-700 font-bold"
                            colspan="2">
                            <span class="">
                                <div>
                                    {{$subject->name}}
                                </div>
                            </span>
                        </td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap border-r border-r-gray-700 font-bold">
                            <span class="">
                                <div>
                                    {{$report->student->tgrades($report->term->id, $subject->id, $report->class->id, $report->student->id)->continious_assesment()}}
                                </div>
                            </span>
                        </td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap border-r border-r-gray-700 font-bold">
                            <span class="">
                                <div>
                                    {{$report->student->tgrades($report->term->id, $subject->id, $report->class->id, $report->student->id)->exam_score()}}
                                </div>
                            </span>
                        </td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap border-r border-r-gray-700 font-bold">
                            <span class="">
                                <div>
                                    {{$report->student->tgrades($report->term->id, $subject->id, $report->class->id, $report->student->id)->total_score()}}
                                </div>
                            </span>
                        </td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap border-r border-r-gray-700 font-bold">
                            <span class="">
                                <div>
                                    {{$report->student->tgrades($report->term->id, $subject->id, $report->class->id, $report->student->id)->grade}}
                                </div>
                            </span>
                        </td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap border-r border-r-gray-700 font-bold">
                            <span class="">
                                <div>
                                    {{$report->student->tgrades($report->term->id, $subject->id, $report->class->id, $report->student->id)->grade_remark()}}
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap font-bold">
                            <span class="">
                                <div>
                                    {{$report->student->gradessubjecttaff($report->term->id, $subject->id, $report->class->id)->full_name}}
                                </div>
                            </span>
                        </td>


                    </tr>
                    @endforeach
                    <tr class="table-t-r !bg-gray-300" style="background-color: #d1d5db !important;">
                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap " colspan="9">
                            <span class="">
                                <div>
                                    Other Subject
                                </div>
                            </span>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class=" capitalize px-3 py-2 whitespace-nowrap  border-r border-r-gray-700 font-bold">
                            <span class="">
                                <div>
                                    subject_name
                                </div>
                            </span>
                        </td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap border-r border-r-gray-700 font-bold">
                            <span class="">
                                <div>
                                    10.00
                                </div>
                            </span>
                        </td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap border-r border-r-gray-700 font-bold">
                            <span class="">
                                <div>
                                    10.00
                                </div>
                            </span>
                        </td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap border-r border-r-gray-700 font-bold">
                            <span class="">
                                <div>
                                    100.0
                                </div>
                            </span>
                        </td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap border-r border-r-gray-700 font-bold">
                            <span class="">
                                <div>
                                    100.0
                                </div>
                            </span>
                        </td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap border-r border-r-gray-700 font-bold">
                            <span class="">
                                <div>
                                    100.0
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap ">
                            <span class="">
                                <div>

                                </div>
                            </span>
                        </td>


                    </tr>
                    <tr class="table-t-r">
                        <td class=" capitalize px-3 py-2 whitespace-nowrap  border-r border-r-gray-700 font-bold">
                            <span class="">
                                <div>
                                    subject_name
                                </div>
                            </span>
                        </td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap border-r border-r-gray-700 font-bold">
                            <span class="">
                                <div>
                                    10.00
                                </div>
                            </span>
                        </td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap border-r border-r-gray-700 font-bold">
                            <span class="">
                                <div>
                                    10.00
                                </div>
                            </span>
                        </td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap border-r border-r-gray-700 font-bold">
                            <span class="">
                                <div>
                                    100.0
                                </div>
                            </span>
                        </td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap border-r border-r-gray-700 font-bold">
                            <span class="">
                                <div>
                                    100.0
                                </div>
                            </span>
                        </td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap border-r border-r-gray-700 font-bold">
                            <span class="">
                                <div>
                                    100.0
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap ">
                            <span class="">
                                <div>

                                </div>
                            </span>
                        </td>


                    </tr>
                    <tr class="table-t-r">
                        <td colspan="9" style="height: 41px !important;"></td>
                    </tr>
                    <tr class="table-t-r">
                        <td class=" capitalize px-3 py-2 whitespace-nowrap  border-r border-r-gray-700 font-bold"
                            colspan="4">
                            <span class="">
                                <div>
                                    Total Score
                                </div>
                            </span>
                        </td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap border-r border-r-gray-700 font-bold">
                            <span class="">
                                <div>
                                    10.00
                                </div>
                            </span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="table-t-r">
                        <td class=" capitalize px-3 py-2 whitespace-nowrap  border-r border-r-gray-700" colspan="2">
                            <span class="">
                                <div>
                                    Attendance:
                                </div>
                            </span>
                        </td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap border-r border-r-gray-700 font-bold">
                            <span class="">
                                <div>
                                    10
                                </div>
                            </span>
                        </td>
                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border-r border-r-gray-700">
                            <span class="">
                                <div>
                                    Out Of
                                </div>
                            </span>
                        </td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap border-r border-r-gray-700 font-bold">
                            <span class="">
                                <div>
                                    10
                                </div>
                            </span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700" colspan="2">
                            <span class="">
                                <div>
                                    Class Teacher's Remarks:
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border-r border-r-gray-700 font-bold"
                            colspan="7">
                            <span class="">
                                <div>
                                    lorem
                                </div>
                            </span>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700" colspan="2">
                            <span class="">
                                <div>
                                    HeadTeacher's Remarks:
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border-r border-r-gray-700 font-bold"
                            colspan="7">
                            <span class="">
                                <div>
                                    lorem
                                </div>
                            </span>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700" colspan="7">
                            <span class="">
                                <div>
                                    Billing
                                </div>
                            </span>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700" colspan="2">
                            <span class="">
                                <div>
                                </div>
                            </span>
                        </td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700 font-bold">
                            <span class="">
                                <div>
                                    GH&cent;
                                </div>
                            </span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700 font-bold">
                        </td>
                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap  border-b-2 border-b-gray-700 font-bold"
                            colspan="2" rowspan="4">
                            <span class="">
                                <div>
                                    GH&cent;
                                </div>
                            </span>
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700" colspan="2">
                            <span class="">
                                <div>
                                    Yearly Fees
                                </div>
                            </span>
                        </td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700 font-bold">
                            <span class="">
                                <div>
                                    0
                                </div>
                            </span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700 font-bold">
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700" colspan="2">
                            <span class="">
                                <div>
                                    Yearly Fees
                                </div>
                            </span>
                        </td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700 font-bold">
                            <span class="">
                                <div>
                                    0
                                </div>
                            </span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700 font-bold">
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700" colspan="2">
                            <span class="">
                                <div>
                                    Yearly Fees
                                </div>
                            </span>
                        </td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700 font-bold">
                            <span class="">
                                <div>
                                    0
                                </div>
                            </span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700 font-bold">
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700" colspan="2">
                            <span class="">
                                <div>
                                    Yearly Fees
                                </div>
                            </span>
                        </td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700 font-bold">
                            <span class="">
                                <div>
                                    0
                                </div>
                            </span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700 font-bold">
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700" colspan="2">
                            <span class="">
                                <div>
                                    Yearly Fees
                                </div>
                            </span>
                        </td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700 font-bold">
                            <span class="">
                                <div>
                                    0
                                </div>
                            </span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td
                            class="text-center uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700 font-bold">
                        </td>
                    </tr>
                    <tr class="table-t-r">
                        <td colspan="9" style="height: 41px !important;"></td>
                    </tr>
                    <tr class="table-t-r">
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700" colspan="7">
                            <span class="">
                                <div>
                                    Billing
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700">
                            <span class="">
                                <div>
                                    Billing loremd
                                </div>
                            </span>
                        </td>
                    </tr>

                    <tr class="table-t-r">
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700" colspan="2">
                            <span class="">
                                <div>
                                    Raw Score
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700">
                            <span class="">
                                <div>
                                    500 - 600
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700">
                            <span class="">
                                <div>
                                    450 - 499
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700">
                            <span class="">
                                <div>
                                    400 - 449
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700">
                            <span class="">
                                <div>
                                    350 - 399
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700">
                            <span class="">
                                <div>
                                    300 - 349
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700">
                            <span class="">
                                <div>
                                    000 - 299
                                </div>
                            </span>
                        </td>
                    </tr>

                    <tr class="table-t-r">
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700" colspan="2">
                            <span class="">
                                <div>
                                    RRemarks
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700">
                            <span class="">
                                <div>
                                    Excellent
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700">
                            <span class="">
                                <div>
                                    Very Good
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700">
                            <span class="">
                                <div>
                                    Good
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700">
                            <span class="">
                                <div>
                                    Average
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700">
                            <span class="">
                                <div>
                                    Pass
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-r border-r-gray-700">
                            <span class="">
                                <div>
                                    Fail
                                </div>
                            </span>
                        </td>
                    </tr>

                </tbody>
            </table>
            </div>
        </x-html-print>
    </x-table-card>
</x-app-layout>