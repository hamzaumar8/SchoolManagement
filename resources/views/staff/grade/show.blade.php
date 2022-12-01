<x-app-layout>
    <x-table-card header="Attendance Summary for  {{$classes->name}} Term {{Session::get('CurrTerm')['term']}} ({{Session::get('CurrTerm')['academic_year']}})">

        <div>
            <table class="table power-grid-table rounded-lg min-w-full border border-slate-200 dark:bg-slate-600 dark:border-slate-500">
                <thead class="shadow-sm bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-500">
                    <tr class="">
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 ">
                            <div class="uppercase">
                                <span>NO.</span>
                            </div>
                        </th>

                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 " style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>Student Name</span>
                            </div>
                        </th>

                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 " style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>Total Attendance</span>
                            </div>
                        </th>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 " style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>Days Present</span>
                            </div>
                        </th>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 " style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>Days Absent</span>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody class="text-slate-800">
                    @forelse ($classes->students->sortBy('fullname()')->sortByDesc('gender') as $student)
                    <tr class="table-t-r">

                        <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200 ">
                            <span class="">
                                <div>
                                    {{ $loop->index + 1 }}
                                </div>
                            </span>
                        </td>
                        <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    {{$student->fullname()}}
                                </div>
                            </span>
                        </td>
                        <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    {{$student->attendanceCount()}}
                                </div>
                            </span>
                        </td>
                        <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    {{$student->studentAttendancePrsesnt()}}
                                </div>
                            </span>
                        </td>
                        <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    {{$student->studentAttendanceAdsent()}}
                                </div>
                            </span>
                        </td>


                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class=" text-center uppercase px-3 py-2 whitespace-nowrap text-red-500 font-bold">
                            <span class="">
                                <div>
                                    No Students in this class
                                </div>
                            </span>
                        </td>
                    </tr>

                    @endforelse

                </tbody>
            </table>
        </div>
    </x-table-card>
</x-app-layout>