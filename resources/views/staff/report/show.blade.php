<x-app-layout>
    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="my-3 overflow-x-auto bg-white overflow-y-auto relative ps ps--active-x">
                    <div class="flex flex-col items-center justify-center">
                        <!-- Html Print Component -->
                        <x-html-print>
                            <table class="relative bg-white table w-full border !border-gray-700 printed"
                                style="width:595px !important; height:842px">
                                <thead class="">
                                    <tr class="">
                                        <th style="width: 12% !important;"></th>
                                        <th style="width: 12% !important;"></th>
                                        <th style="width: 10% !important;"></th>
                                        <th style="width: 10% !important;"></th>
                                        <th style="width: 10% !important;"></th>
                                        <th style="width: 10% !important;"></th>
                                        <th style="width: 12% !important;"></th>
                                        <th style="width: 12% !important;"></th>
                                        <th style="width: 12% !important;"></th>
                                    </tr>
                                </thead>
                                <tbody class="text-slate-800 border-gray-700">
                                    <tr class="">
                                        <td class="px-2 py-3 text-left text-xs whitespace-nowrap" colspan="2">
                                            <x-application-logo class="h-40" />
                                        </td>
                                        <td class="font-bold text-lg text-gray-900 uppercase px-2 py-3 text-center whitespace-nowrap"
                                            style="width: max-content;  cursor:pointer;" colspan="5">
                                            <div class="">
                                                <div>University Basic School - North Campus</div>
                                                <div>University of Cape Coast</div>
                                                <div>Cape Coast</div>
                                                <div><span class="mr-2">Email:</span> vaddison@ucc.edu.gh</div>
                                                <div><span class="mr-2">Mobile:</span> +233261231844</div>
                                                <div><span class="mr-2">Website:</span> <a href="https://www.ucc.edu.gh"
                                                        target="blank">www.ucc.edu.gh</a></div>
                                            </div>
                                        </td>
                                        <td class="px-2 py-3 !text-right  whitespace-nowrap" colspan="2">
                                            <img src="{{asset('assets/img/addmission')}}/{{$student->addmission->passport_picture}}"
                                                class="h-40 inline" alt="">
                                        </td>
                                    </tr>
                                    <tr class="font-bold">
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="2">
                                            <span class="">
                                                <div>
                                                    Student Name:
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="5">
                                            <span>
                                                {{$student->fullname()}}
                                            </span>
                                        </td>
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border">
                                            <span class="">
                                                Session
                                            </span>
                                        </td>
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                            <span class="">
                                                {{$report->term->term}}
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="font-bold">
                                        <td class="uppercase px-3 py-2 whitespace-nowrap font-bold" colspan="2">
                                            <span class="">
                                                <div>
                                                    Index Number:
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                            <span>
                                                {{$student->index_number}}
                                            </span>
                                        </td>

                                        <td></td>

                                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="2">
                                            <span class="">
                                                Class Enrollment
                                            </span>
                                        </td>
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                            <span class="">

                                            </span>
                                        </td>
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                            <span class="">
                                                Class Position
                                            </span>
                                        </td>
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border">
                                            <span class="">
                                                20
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="font-bold">
                                        <td class="uppercase px-3 py-2 whitespace-nowrap  border font-bold" colspan="2">
                                            <span class="">
                                                <div>
                                                    Class:
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                            <span>
                                                {{$report->class->name}}
                                            </span>
                                        </td>
                                        <td></td>
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="2">
                                            <span class="">
                                                Overall Enrollment
                                            </span>
                                        </td>
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                            <span class="">

                                            </span>
                                        </td>
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                            <span class="">
                                                Overall Position
                                            </span>
                                        </td>
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border">
                                            <span class="">
                                                20
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="font-bold">
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="2">
                                            <span class="">
                                                <div>
                                                    Academic Year:
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                            <span>
                                                {{$report->term->academic_year}}
                                            </span>
                                        </td>
                                        <td></td>
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="2">
                                            <span class="">
                                                Vacation Date
                                            </span>
                                        </td>
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                            <span class="">
                                                {{$report->term->end_date}}
                                            </span>
                                        </td>
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                            <span class="">
                                                Reopen Date
                                            </span>
                                        </td>
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border">
                                            <span class="">

                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="">
                                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap font-bold"
                                            colspan="9">
                                            <span class="underline">
                                                Session Report
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="font-bold !text-center">
                                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-2 font-bold"
                                            colspan="2">
                                            <span class="">
                                                <div>
                                                    Subjects
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-2 font-bold">
                                            <span>
                                                Class <br>
                                                Score <br>
                                                50%
                                            </span>
                                        </td>
                                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-2 font-bold">
                                            <span>
                                                Exam <br>
                                                Score <br>
                                                50%
                                            </span>
                                        </td>
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border-2 font-bold">
                                            <span>
                                                Total <br>
                                                Score <br>
                                                50%
                                            </span>
                                        </td>
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border-2 font-bold">
                                            <span class="">
                                                Grade
                                            </span>
                                        </td>
                                        <td class="uppercase px-3 py-2 whitespace-nowrap  border-2 font-bold">
                                            <span class="">
                                                Remarks
                                            </span>
                                        </td>
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border-2" colspan="2">
                                            <span class="">
                                                Subject Facilitator
                                            </span>
                                        </td>

                                    </tr>

                                    <tr class="bg-gray-300 hover:bg-gray-300"
                                        style="background-color: #d1d5db !important;">
                                        <td class="text-center font-bold uppercase px-3 py-2 whitespace-nowrap"
                                            colspan="9">
                                            <span class="">
                                                <div>
                                                    Core Subject
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                    @foreach($report->class->subjects as $subject)
                                    @if($subject->type == 'core')
                                    <tr class="">
                                        <td class=" capitalize px-3 py-2 whitespace-nowrap border  font-bold"
                                            colspan="2">
                                            <span class="">
                                                <div>
                                                    {{$subject->name}}
                                                </div>
                                            </span>
                                        </td>
                                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                            <span class="">
                                                <div>
                                                    {{$report->student->tgrades($report->term->id, $subject->id, $report->class->id, $report->student->id)->continious_assesment()}}
                                                </div>
                                            </span>
                                        </td>
                                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                            <span class="">
                                                <div>
                                                    {{$report->student->tgrades($report->term->id, $subject->id, $report->class->id, $report->student->id)->exam_score()}}
                                                </div>
                                            </span>
                                        </td>
                                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                            <span class="">
                                                <div>
                                                    {{$report->student->tgrades($report->term->id, $subject->id, $report->class->id, $report->student->id)->total_score()}}
                                                </div>
                                            </span>
                                        </td>
                                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                            <span class="">
                                                <div>
                                                    {{$report->student->tgrades($report->term->id, $subject->id, $report->class->id, $report->student->id)->grade}}
                                                </div>
                                            </span>
                                        </td>
                                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                            <span class="">
                                                <div>
                                                    {{$report->student->tgrades($report->term->id, $subject->id, $report->class->id, $report->student->id)->grade_remark()}}
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="2">
                                            <span class="">
                                                <div>
                                                    {{$report->student->gradessubjecttaff($report->term->id, $subject->id, $report->class->id)->full_name}}
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                    <tr class="bg-gray-300 hover:bg-gray-300"
                                        style="background-color: #d1d5db !important;">
                                        <td class="text-center font-bold uppercase px-3 py-2 whitespace-nowrap "
                                            colspan="9">
                                            <span class="">
                                                <div>
                                                    Other Subject
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                    @foreach($report->class->subjects as $subject)
                                    @if($subject->type == 'other')
                                    <tr class="">
                                        <td class=" capitalize px-3 py-2 whitespace-nowrap border  font-bold"
                                            colspan="2">
                                            <span class="">
                                                <div>
                                                    {{$subject->name}}
                                                </div>
                                            </span>
                                        </td>
                                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                            <span class="">
                                                <div>
                                                    {{$report->student->tgrades($report->term->id, $subject->id, $report->class->id, $report->student->id)->continious_assesment()}}
                                                </div>
                                            </span>
                                        </td>
                                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                            <span class="">
                                                <div>
                                                    {{$report->student->tgrades($report->term->id, $subject->id, $report->class->id, $report->student->id)->exam_score()}}
                                                </div>
                                            </span>
                                        </td>
                                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                            <span class="">
                                                <div>
                                                    {{$report->student->tgrades($report->term->id, $subject->id, $report->class->id, $report->student->id)->total_score()}}
                                                </div>
                                            </span>
                                        </td>
                                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                            <span class="">
                                                <div>
                                                    {{$report->student->tgrades($report->term->id, $subject->id, $report->class->id, $report->student->id)->grade}}
                                                </div>
                                            </span>
                                        </td>
                                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                            <span class="">
                                                <div>
                                                    {{$report->student->tgrades($report->term->id, $subject->id, $report->class->id, $report->student->id)->grade_remark()}}
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="2">
                                            <span class="">
                                                <div>
                                                    {{$report->student->gradessubjecttaff($report->term->id, $subject->id, $report->class->id)->full_name}}
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                    <tr class="">
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border  font-bold" colspan="4">
                                            <span class="">
                                                <div>
                                                    Total Score
                                                </div>
                                            </span>
                                        </td>
                                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                            <span class="">
                                                <div>
                                                    {{$report->student->studentTotalScoreGrades($report->term->id, $report->class->id, $report->student->id)}}
                                                </div>
                                            </span>
                                        </td>
                                        <td colspan="4"></td>
                                    </tr>
                                    <tr class="">
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border " colspan="2">
                                            <span class="">
                                                <div>
                                                    Attendance:
                                                </div>
                                            </span>
                                        </td>
                                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                            <span class="">
                                                <div>
                                                    {{$report->student->studentTotalPresentAttendanceReport($report->term->id, $report->class->id, $report->student->id)}}
                                                </div>
                                            </span>
                                        </td>
                                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border-r ">
                                            <span class="">
                                                <div>
                                                    Out Of
                                                </div>
                                            </span>
                                        </td>
                                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                            <span class="">
                                                <div>
                                                    {{$report->student->studentTotalAttendanceReport($report->term->id, $report->class->id, $report->student->id)}}
                                                </div>
                                            </span>
                                        </td>
                                        <td colspan="4"></td>
                                    </tr>
                                    <tr class="">
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border " colspan="2">
                                            <span class="">
                                                <div>
                                                    Class Teacher's Remarks:
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="7">
                                            <span class="">
                                                <div>
                                                    lorem
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border " colspan="2">
                                            <span class="">
                                                <div>
                                                    HeadTeacher's Remarks:
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="7">
                                            <span class="">
                                                <div>
                                                    lorem
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-300 hover:bg-gray-300"
                                        style="background-color: #d1d5db !important;">
                                        <td class="uppercase text-center font-bold px-3 py-2 whitespace-nowrap border "
                                            colspan="9">
                                            <span class="">
                                                <div>
                                                    Billing
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border " colspan="2">
                                            <span class="">
                                                <div>
                                                </div>
                                            </span>
                                        </td>
                                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border  font-bold">
                                            <span class="">
                                                <div>
                                                    GH&cent;
                                                </div>
                                            </span>
                                        </td>
                                        <td colspan="4"></td>

                                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border border-b-2 font-bold"
                                            colspan="2" rowspan="5">
                                            <span class="">
                                                <div>
                                                    GH&cent;
                                                </div>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="">
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border " colspan="2">
                                            <span class="">
                                                <div>
                                                    Yearly Fees
                                                </div>
                                            </span>
                                        </td>
                                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border  font-bold">
                                            <span class="">
                                                <div>
                                                    0
                                                </div>
                                            </span>
                                        </td>
                                        <td colspan="4"></td>
                                    </tr>
                                    <tr class="">
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border " colspan="2">
                                            <span class="">
                                                <div>
                                                    Session Fees
                                                </div>
                                            </span>
                                        </td>
                                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border  font-bold">
                                            <span class="">
                                                <div>
                                                    0
                                                </div>
                                            </span>
                                        </td>
                                        <td colspan="4"></td>
                                    </tr>
                                    <tr class="">
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border " colspan="2">
                                            <span class="">
                                                <div>
                                                    Amount Paid
                                                </div>
                                            </span>
                                        </td>
                                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border  font-bold">
                                            <span class="">
                                                <div>
                                                    0
                                                </div>
                                            </span>
                                        </td>
                                        <td colspan="4"></td>
                                    </tr>
                                    <tr class="">
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border " colspan="2">
                                            <span class="">
                                                <div>
                                                    Amount In Arrears
                                                </div>
                                            </span>
                                        </td>
                                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border  font-bold">
                                            <span class="">
                                                <div>
                                                    0
                                                </div>
                                            </span>
                                        </td>
                                        <td colspan="4"></td>
                                    </tr>
                                    <tr class="">
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border " colspan="2">
                                            <span class="">
                                                <div>
                                                    Amount Due for Payment
                                                </div>
                                            </span>
                                        </td>
                                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border  font-bold">
                                            <span class="">
                                                <div>
                                                    0
                                                </div>
                                            </span>
                                        </td>
                                        <td colspan="4"></td>
                                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border  font-bold"
                                            colspan="2">
                                            <span class="">
                                                <div>
                                                    Headteacher
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-300 hover:bg-gray-300"
                                        style="background-color: #d1d5db !important;">
                                        <td colspan="9"
                                            class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                            <span class="">
                                                <div>Grade Interpretation</div>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="font-bold">
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    Score Range
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    80 - 100
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    75 - 79
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    70 - 74
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center whitespace-nowrap border ">
                                            <div class="flex">
                                                <div class="w-1/2 px-3 py-2 border-r border-r-gray-700 ">
                                                    65 - 69
                                                </div>
                                                <div class="px-3 py-2">
                                                    60 - 64
                                                </div>
                                            </div>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    55 - 59
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    50 - 54
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    40 - 49
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    00 - 39
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="font-bold">
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    Grade
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    1
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    2
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    3
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center whitespace-nowrap border ">
                                            <div class="flex">
                                                <div class="w-1/2 px-3 py-2 border-r border-r-gray-700">
                                                    4
                                                </div>
                                                <div class="px-3 py-2">
                                                    5
                                                </div>
                                            </div>
                                        </td>
                                        <td class=" uppercase text-center px-3 py-2 whitespace-nowrap border-r ">
                                            <span class="">
                                                <div>
                                                    6
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    7
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    8
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    9
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="font-bold">
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    Remarks
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    Execellent
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    Very Good
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    Good
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    Average
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    Below Average
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    Pass
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    Weak Pass
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    Fail
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-300 hover:bg-gray-300"
                                        style="background-color: #d1d5db !important;">
                                        <td colspan="9"
                                            class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                            <span class="">
                                                <div>Raw Score Interpretation</div>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="font-bold">
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border " colspan="2">
                                            <span class="">
                                                <div>
                                                    Raw Score
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    500 - 600
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    450 - 499
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    400 - 449
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    350 - 399
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    300 - 349
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border "
                                            colspan="2">
                                            <span class="">
                                                <div>
                                                    000 - 299
                                                </div>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="font-bold">
                                        <td class="uppercase px-3 py-2 whitespace-nowrap border " colspan="2">
                                            <span class="">
                                                <div>
                                                    Remarks
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    Excellent
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    Very Good
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    Good
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    Average
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                                            <span class="">
                                                <div>
                                                    Pass
                                                </div>
                                            </span>
                                        </td>
                                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border "
                                            colspan="2">
                                            <span class="">
                                                <div>
                                                    Fail
                                                </div>
                                            </span>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </x-html-print>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>