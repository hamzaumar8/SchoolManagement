<x-app-layout>
    <!-- Html Print Component -->
    <x-html-print>
        @if ($report->class->class_type == 'basic school' || $report->class->class_type == 'junior high')
            <table class="table !text-slate-800 border !border-gray-700 printed relative">
                <thead>
                    <tr>
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
                <tbody>
                    <tr>
                        <td class="px-2 py-3 text-left text-xs whitespace-nowrap" colspan="2">
                            <x-application-logo class="h-40" />
                        </td>
                        <td class="font-bold text-lg text-gray-900 uppercase px-2 py-3 text-center whitespace-nowrap"
                            style="width: max-content;  cursor:pointer;" colspan="5">
                            <div>
                                <div>University Basic School - North Campus</div>
                                <div>University of Cape Coast</div>
                                <div>Cape Coast</div>
                                <div><span class="mr-2">Email:</span> vaddison@ucc.edu.gh</div>
                                <div><span class="mr-2">Mobile:</span> +233261231844</div>
                                <div><span class="mr-2">Website:</span> <a href="https://www.ucc.edu.gh"
                                        target="blank">www.ucc.edu.gh</a>
                                </div>
                            </div>
                        </td>
                        <td class="px-2 py-3 !text-right  whitespace-nowrap" colspan="2">
                            <img src="{{ asset('assets/img/addmission') }}/{{ $report->student->addmission->passport_picture }}"
                                class="h-40 inline" alt="">
                        </td>
                    </tr>
                    <tr class="font-bold">
                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="2">
                            <span>
                                <div>
                                    Student Name:
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="5">
                            <span>
                                {{ $report->student->fullname() }}
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border">
                            <span>
                                Session
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold">
                            <span>
                                {{ $report->term->term }}
                            </span>
                        </td>
                    </tr>

                    <tr class="font-bold">
                        <td class="uppercase px-3 py-2 whitespace-nowrap font-bold" colspan="2">
                            <span>
                                <div>
                                    Index Number:
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold">
                            <span>
                                {{ $report->student->index_number }}
                            </span>
                        </td>

                        <td></td>

                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="2">
                            <span>
                                Class Enrollment
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold">
                            <span>
                                {{ $report->class_enrollment }}
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold">
                            <span>
                                Class Position
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border">
                            <span>
                                {{ $report->class_position }}

                            </span>
                        </td>
                    </tr>

                    <tr class="font-bold">
                        <td class="uppercase px-3 py-2 whitespace-nowrap  border font-bold" colspan="2">
                            <span>
                                <div>
                                    Class:
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold">
                            <span>
                                {{ $report->class->name }}
                            </span>
                        </td>
                        <td></td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="2">
                            <span>
                                Overall Enrollment
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold">
                            <span>{{ $report->overall_enrollment }}
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold">
                            <span>
                                Overall Position
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border">
                            <span>
                                {{ $report->overall_position }}
                            </span>
                        </td>
                    </tr>

                    <tr class="font-bold">
                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="2">
                            <span>
                                <div>
                                    Academic Year:
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold">
                            <span>
                                {{ $report->term->academic_year }}
                            </span>
                        </td>
                        <td></td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="2">
                            <span>
                                Vacation Date
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold">
                            <span>
                                {{ $report->term->end_date }}
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold">
                            <span>
                                Reopen Date
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border">
                            <span>{{ $report->reopen_date }}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap font-bold" colspan="9">
                            <span class="underline">
                                Session Report
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table !text-slate-800 border !border-gray-700 printed relative">
                <tbody>

                    <tr class="font-bold !text-center">
                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="2"
                            style="width: 24% !important;">
                            <span>
                                <div>
                                    Subjects
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold"
                            style="width: 10% !important;">
                            <span>
                                Class <br>
                                Score <br>
                                50%
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold"
                            style="width: 10% !important;">
                            <span>
                                Exam <br>
                                Score <br>
                                50%
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold"
                            style="width: 10% !important;">
                            <span>
                                Total <br>
                                Score <br>
                                50%
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold"
                            style="width: 10% !important;">
                            <span>
                                Grade
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold"
                            style="width: 12% !important;">
                            <span>
                                Remarks
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border" colspan="2"
                            style="width: 24% !important;">
                            <span>
                                Subject Facilitator
                            </span>
                        </td>

                    </tr>

                    <tr class="bg-gray-300 hover:bg-gray-300" style="background-color: #d1d5db !important;">
                        <td class="text-center font-bold uppercase px-3 py-2 whitespace-nowrap" colspan="9">
                            <span>
                                <div>
                                    Core Subject
                                </div>
                            </span>
                        </td>
                    </tr>
                    @foreach ($report->class->subjects as $subject)
                        @if ($subject->type == 'core')
                            <tr>
                                <td class="uppercase px-3 py-2 whitespace-nowrap border  font-bold" colspan="2">
                                    <span>
                                        <div>
                                            {{ $subject->name }}
                                        </div>
                                    </span>
                                </td>
                                <td class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                    <span>
                                        <div>
                                            {{ $report->student->tgrades($report->term->id, $subject->id, $report->class->id, $report->student->id)->continious_assesment() }}
                                        </div>
                                    </span>
                                </td>
                                <td class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                    <span>
                                        <div>
                                            {{ $report->student->tgrades($report->term->id, $subject->id, $report->class->id, $report->student->id)->exam_score() }}
                                        </div>
                                    </span>
                                </td>
                                <td class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                    <span>
                                        <div>
                                            {{ $report->student->tgrades($report->term->id, $subject->id, $report->class->id, $report->student->id)->total_score() }}
                                        </div>
                                    </span>
                                </td>
                                <td class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                    <span>
                                        <div>
                                            {{ $report->student->tgrades($report->term->id, $subject->id, $report->class->id, $report->student->id)->grade }}
                                        </div>
                                    </span>
                                </td>
                                <td class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                    <span>
                                        <div>
                                            {{ $report->student->tgrades($report->term->id, $subject->id, $report->class->id, $report->student->id)->grade_remark() }}
                                        </div>
                                    </span>
                                </td>
                                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="2">
                                    <span>
                                        <div>
                                            {{ $report->student->gradessubjecttaff($report->term->id, $subject->id, $report->class->id)->full_name }}
                                        </div>
                                    </span>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    <tr class="bg-gray-300 hover:bg-gray-300" style="background-color: #d1d5db !important;">
                        <td class="text-center font-bold uppercase px-3 py-2 whitespace-nowrap border " colspan="9">
                            <span>
                                <div>
                                    Other Subject
                                </div>
                            </span>
                        </td>
                    </tr>
                    @foreach ($report->class->subjects as $subject)
                        @if ($subject->type == 'other')
                            <tr>
                                <td class="uppercase px-3 py-2 whitespace-nowrap border  font-bold" colspan="2">
                                    <span>
                                        <div>
                                            {{ $subject->name }}
                                        </div>
                                    </span>
                                </td>
                                <td class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                    <span>
                                        <div>
                                            {{ $report->student->tgrades($report->term->id, $subject->id, $report->class->id, $report->student->id)->continious_assesment() }}
                                        </div>
                                    </span>
                                </td>
                                <td class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                    <span>
                                        <div>
                                            {{ $report->student->tgrades($report->term->id, $subject->id, $report->class->id, $report->student->id)->exam_score() }}
                                        </div>
                                    </span>
                                </td>
                                <td class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                    <span>
                                        <div>
                                            {{ $report->student->tgrades($report->term->id, $subject->id, $report->class->id, $report->student->id)->total_score() }}
                                        </div>
                                    </span>
                                </td>
                                <td class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                    <span>
                                        <div>
                                            {{ $report->student->tgrades($report->term->id, $subject->id, $report->class->id, $report->student->id)->grade }}
                                        </div>
                                    </span>
                                </td>
                                <td class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                                    <span>
                                        <div>
                                            {{ $report->student->tgrades($report->term->id, $subject->id, $report->class->id, $report->student->id)->grade_remark() }}
                                        </div>
                                    </span>
                                </td>
                                <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="2">
                                    <span>
                                        <div>
                                            {{ $report->student->gradessubjecttaff($report->term->id, $subject->id, $report->class->id)->full_name }}
                                        </div>
                                    </span>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    <tr>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border  font-bold" colspan="4">
                            <span>
                                <div>
                                    Total Score
                                </div>
                            </span>
                        </td>
                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                            <span>
                                <div>
                                    {{ $report->student->studentTotalScoreGrades($report->term->id, $report->class->id, $report->student->id) }}
                                </div>
                            </span>
                        </td>
                        <td colspan="4"></td>
                    </tr>
                    <tr>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border " colspan="2">
                            <span>
                                <div>
                                    Attendance:
                                </div>
                            </span>
                        </td>
                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                            <span>
                                <div>
                                    {{ $report->attendance_present_total }}
                                </div>
                            </span>
                        </td>
                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border-r ">
                            <span>
                                <div>
                                    Out Of
                                </div>
                            </span>
                        </td>
                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                            <span>
                                <div>
                                    {{ $report->attendance_total }}
                                </div>
                            </span>
                        </td>
                        <td colspan="4"></td>
                    </tr>
                    <tr>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border " colspan="2">
                            <span>
                                <div>
                                    Class Teacher's Remarks:
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="7">
                            <span>
                                <div>
                                    {{ $report->class_teacher_remark }}
                                </div>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border " colspan="2">
                            <span>
                                <div>
                                    HeadTeacher's Remarks:
                                </div>
                            </span>
                        </td>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border font-bold" colspan="7">
                            <span>
                                <div>
                                    {{ $report->head_master_remark }}
                                </div>
                            </span>
                        </td>
                    </tr>

                </tbody>
            </table>
            <table class="table !text-slate-800 border !border-gray-700 printed relative">
                <tbody>
                    <tr class="bg-gray-300 hover:bg-gray-300" style="background-color: #d1d5db !important;">
                        <td class="uppercase text-center font-bold px-3 py-2 whitespace-nowrap border "
                            colspan="9">
                            <span>
                                <div>
                                    Billing
                                </div>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border " colspan="2"
                            style="width: 24% !important;">
                            <span>
                                <div>
                                </div>
                            </span>
                        </td>
                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold"
                            style="width: 10% !important;">
                            <span>
                                <div>
                                    GH&cent;
                                </div>
                            </span>
                        </td>
                        <td colspan="4" style="width: 42% !important;"></td>
                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border border-b-2 font-bold"
                            colspan="2" rowspan="5" style="width: 24% !important;">
                            <span>
                                <div>
                                    <img alt="Headteacher signature" />
                                </div>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border " colspan="2">
                            <span>
                                <div>
                                    Yearly Fees
                                </div>
                            </span>
                        </td>
                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border  font-bold">
                            <span>
                                <div>
                                    0
                                </div>
                            </span>
                        </td>
                        <td colspan="4"></td>
                    </tr>
                    <tr>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border " colspan="2">
                            <span>
                                <div>
                                    Session Fees
                                </div>
                            </span>
                        </td>
                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border  font-bold">
                            <span>
                                <div>
                                    0
                                </div>
                            </span>
                        </td>
                        <td colspan="4"></td>
                    </tr>
                    <tr>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border " colspan="2">
                            <span>
                                <div>
                                    Amount Paid
                                </div>
                            </span>
                        </td>
                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border  font-bold">
                            <span>
                                <div>
                                    0
                                </div>
                            </span>
                        </td>
                        <td colspan="4"></td>
                    </tr>
                    <tr>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border " colspan="2">
                            <span>
                                <div>
                                    Amount In Arrears
                                </div>
                            </span>
                        </td>
                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border  font-bold">
                            <span>
                                <div>
                                    0
                                </div>
                            </span>
                        </td>
                        <td colspan="4"></td>
                    </tr>
                    <tr>
                        <td class="uppercase px-3 py-2 whitespace-nowrap border " colspan="2">
                            <span>
                                <div>
                                    Amount Due for Payment
                                </div>
                            </span>
                        </td>
                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border  font-bold">
                            <span>
                                <div>
                                    0
                                </div>
                            </span>
                        </td>
                        <td colspan="4"></td>
                        <td class="text-center uppercase px-3 py-2 whitespace-nowrap border  font-bold"
                            colspan="2">
                            <span>
                                <div>
                                    Headteacher
                                </div>
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table !text-slate-800 border !border-gray-700 printed relative">
                <tbody>
                    <tr class="bg-gray-300 hover:bg-gray-300" style="background-color: #d1d5db !important;">
                        <td colspan="9" class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                            <span>
                                <div>Grade Interpretation</div>
                            </span>
                        </td>
                    </tr>

                    <tr class="font-bold">
                        <td class="uppercase px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    Score Range
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    80 - 100
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    75 - 79
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
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
                            <span>
                                <div>
                                    55 - 59
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    50 - 54
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    40 - 49
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    00 - 39
                                </div>
                            </span>
                        </td>
                    </tr>
                    <tr class="font-bold">
                        <td class="uppercase px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    Grade
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    1
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    2
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
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
                            <span>
                                <div>
                                    6
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    7
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    8
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    9
                                </div>
                            </span>
                        </td>
                    </tr>
                    <tr class="font-bold">
                        <td class="uppercase px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    Remarks
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    Execellent
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    Very Good
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    Good
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    Average
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    Below Average
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    Pass
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    Weak Pass
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    Fail
                                </div>
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table !text-slate-800 border !border-gray-700 printed relative">
                <tbody>
                    <tr class="bg-gray-300 hover:bg-gray-300" style="background-color: #d1d5db !important;">
                        <td colspan="9" class="text-center uppercase px-3 py-2 whitespace-nowrap border font-bold">
                            <span>
                                <div>Raw Score Interpretation</div>
                            </span>
                        </td>
                    </tr>
                    <tr class="font-bold">
                        <td class="uppercase px-3 py-2 whitespace-nowrap border " colspan="2">
                            <span>
                                <div>
                                    Raw Score
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    500 - 600
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    450 - 499
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    400 - 449
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    350 - 399
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    300 - 349
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border " colspan="2">
                            <span>
                                <div>
                                    000 - 299
                                </div>
                            </span>
                        </td>
                    </tr>

                    <tr class="font-bold">
                        <td class="uppercase px-3 py-2 whitespace-nowrap border " colspan="2">
                            <span>
                                <div>
                                    Remarks
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    Excellent
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    Very Good
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    Good
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    Average
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border ">
                            <span>
                                <div>
                                    Pass
                                </div>
                            </span>
                        </td>
                        <td class="uppercase text-center px-3 py-2 whitespace-nowrap border " colspan="2">
                            <span>
                                <div>
                                    Fail
                                </div>
                            </span>
                        </td>
                    </tr>

                </tbody>
            </table>
            {{-- </div> --}}
        @else
            <livewire:staff.report.show.nursery :report="$report" />
        @endif
    </x-html-print>
</x-app-layout>
