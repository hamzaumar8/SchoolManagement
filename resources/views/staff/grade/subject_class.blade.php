<x-app-layout>
    <style>
    table.table input {
        border: 1px solid;
        padding: 2px 5px;
        width: 60%;
    }
    </style>
    <x-table-card header="Assesment Sheet For">
        <div>
            <table
                class="table power-grid-table rounded-lg min-w-full border border-slate-200 dark:bg-slate-600 dark:border-slate-500">
                <thead class="shadow-sm bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-500">
                    <tr class="">
                        <th
                            class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 ">
                            <div class="uppercase">
                                <span>NO.</span>
                            </div>
                        </th>

                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 "
                            style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>Student Name</span>
                            </div>
                        </th>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 "
                            style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>Index Number</span>
                            </div>
                        </th>

                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 "
                            style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>CAT 1 (20) </span>
                            </div>
                        </th>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 "
                            style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>GW (10) </span>
                            </div>
                        </th>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 "
                            style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>CAT 2 (20) </span>
                            </div>
                        </th>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 "
                            style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>Total Assesment (50%) </span>
                            </div>
                        </th>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 "
                            style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>EXAMS (100%) </span>
                            </div>
                        </th>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 "
                            style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>Exams (50%)</span>
                            </div>
                        </th>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 "
                            style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span> Total </span>
                            </div>
                        </th>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 "
                            style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>Grade</span>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody class="text-slate-800">
                    @forelse ($gradesystem->grades as $grade)
                    <tr
                        class="border border-slate-100 dark:border-slate-400 hover:bg-slate-50 dark:bg-slate-700 dark:odd:bg-slate-800 dark:odd:hover:bg-slate-900 dark:hover:bg-slate-700">

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
                                    {{$grade->student->index_number}}
                                </div>
                            </span>
                        </td>
                        <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    {{$grade->student->fullname()}}
                                </div>
                            </span>
                        </td>
                        <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    <input type="" value="{{$grade->cat1}}" />
                                </div>
                            </span>
                        </td>
                        <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    <input type="" value="{{$grade->gw}}" />
                                </div>
                            </span>
                        </td>
                        <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    <input type="" value="{{$grade->cat2}}" />
                                </div>
                            </span>
                        </td>
                        <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    {{$grade->continious_assesment()}}

                                </div>
                            </span>
                        </td>
                        <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    <input type="" value="{{$grade->exam}}" />
                                </div>
                            </span>
                        </td>
                        <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    {{$grade->final_exam}}
                                </div>
                            </span>
                        </td>
                        <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    {{$grade->total}}
                                </div>
                            </span>
                        </td>
                        <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    {{$grade->grade}}
                                </div>
                            </span>
                        </td>


                    </tr>
                    @empty
                    <tr>
                        <td colspan="5"
                            class=" text-center uppercase px-3 py-2 whitespace-nowrap text-red-500 font-bold">
                            <span class="">
                                <div>

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