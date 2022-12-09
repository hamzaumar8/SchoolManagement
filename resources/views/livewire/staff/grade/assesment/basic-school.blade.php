<div>

    <div class="my-3 overflow-x-auto bg-white shadow-lg rounded-lg overflow-y-auto relative ps ps--active-x">

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
                    <th class="block !w-[100px] ">
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
                    <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 "
                        style="width: max-content;  cursor:pointer;">
                        <div class="uppercase">
                            <span>Remark</span>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody class="text-slate-800">
                @if($gradesystem->status == 'not submitted')
                @forelse ($grades as $index => $grade)
                <tr class="table-t-r">

                    <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200 ">
                        <span class="">
                            <div>
                                {{ $index + 1 }}
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
                    <td class="block !w-[100px] ">
                    </td>
                    <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200">
                        <span class="">
                            <div>
                                <input type="" wire:model="grades.{{ $index }}.cat1"
                                    class="w-[80px] py-1 px-2 bg-gray-50 border-2 @error('grades.' .$index. '.cat1') border-red-500 @enderror text-slate-900 rounded-md focus:ring-blue-500 focus:border-blue-500" />
                            </div>
                        </span>
                    </td>
                    <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200">
                        <span class="">
                            <div>
                                <input type="" wire:model="grades.{{ $index }}.gw"
                                    class="w-[80px] py-1 px-2 bg-gray-50 border-2 @error('grades.' .$index. '.gw') border-red-500 @enderror text-slate-900 rounded-md focus:ring-blue-500 focus:border-blue-500" />
                            </div>
                        </span>
                    </td>
                    <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200">
                        <span class="">
                            <div>
                                <input type="" wire:model="grades.{{ $index }}.cat2"
                                    class="w-[80px] py-1 px-2 bg-gray-50 border-2  @error('grades.' .$index. '.cat2') border-red-500 @enderror text-slate-900 rounded-md focus:ring-blue-500 focus:border-blue-500" />
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
                                <input type="" wire:model="grades.{{ $index }}.exam"
                                    class="w-[80px] py-1 px-2 bg-gray-50 border-2 @error('grades.' .$index. '.exam') border-red-500 @enderror text-slate-900 rounded-md focus:ring-blue-500 focus:border-blue-500" />
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
                    <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200 font-bold">
                        <span class="">
                            <div>
                                @if($grade->grade == 9)
                                <span class="text-red-700">{{$grade->grade}}</span>
                                @else
                                {{$grade->grade}}
                                @endif
                            </div>
                        </span>
                    </td>
                    <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200">
                        <span class="">
                            <div>
                                {{$grade->grade_remark()}}
                            </div>
                        </span>
                    </td>


                </tr>
                @empty
                <tr>
                    <td colspan="12" class=" text-center uppercase px-3 py-2 whitespace-nowrap text-red-500 font-bold">
                        <span class="">
                            <div>
                                no student in this class
                            </div>
                        </span>
                    </td>
                </tr>
                @endforelse
                @else
                @forelse ($grades as $index => $grade)
                <tr class="table-t-r">

                    <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200 ">
                        <span class="">
                            <div>
                                {{ $index + 1 }}
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
                    <td class="block !w-[100px] ">
                    </td>
                    <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200">
                        <span class="">
                            <div>
                                <input type="" wire:model="grades.{{ $index }}.cat1"
                                    class="w-[80px] py-1 px-2 bg-gray-50 border-2 @error('grades.' .$index. '.cat1') border-red-500 @enderror text-slate-900 rounded-md focus:ring-blue-500 focus:border-blue-500" disabled/>
                            </div>
                        </span>
                    </td>
                    <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200">
                        <span class="">
                            <div>
                                <input type="" wire:model="grades.{{ $index }}.gw"
                                    class="w-[80px] py-1 px-2 bg-gray-50 border-2 @error('grades.' .$index. '.gw') border-red-500 @enderror text-slate-900 rounded-md focus:ring-blue-500 focus:border-blue-500" disabled/>
                            </div>
                        </span>
                    </td>
                    <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200">
                        <span class="">
                            <div>
                                <input type="" wire:model="grades.{{ $index }}.cat2"
                                    class="w-[80px] py-1 px-2 bg-gray-50 border-2  @error('grades.' .$index. '.cat2') border-red-500 @enderror text-slate-900 rounded-md focus:ring-blue-500 focus:border-blue-500" disabled/>
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
                                <input type="" wire:model="grades.{{ $index }}.exam"
                                    class="w-[80px] py-1 px-2 bg-gray-50 border-2 @error('grades.' .$index. '.exam') border-red-500 @enderror text-slate-900 rounded-md focus:ring-blue-500 focus:border-blue-500" disabled/>
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
                    <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200 font-bold">
                        <span class="">
                            <div>
                                @if($grade->grade == 9)
                                <span class="text-red-700">{{$grade->grade}}</span>
                                @else
                                {{$grade->grade}}
                                @endif
                            </div>
                        </span>
                    </td>
                    <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200">
                        <span class="">
                            <div>
                                {{$grade->grade_remark()}}
                            </div>
                        </span>
                    </td>


                </tr>
                @empty
                <tr>
                    <td colspan="12" class=" text-center uppercase px-3 py-2 whitespace-nowrap text-red-500 font-bold">
                        <span class="">
                            <div>
                                no student in this class
                            </div>
                        </span>
                    </td>
                </tr>
                @endforelse
                @endif

            </tbody>
        </table>

    </div>
    <div>
        @if($grades->count() > 0)
        @if($gradesystem->status == 'not submitted')
        <div class="flex items-center justify-between mt-4 space-x-5">
            <x-button blue wire:click.prevent="save" spinner="save" :label="__('Save and Continue later')"
                class="w-1/2 uppercase font-bold" />

            <x-button rose wire:click.prevent="submit" spinner="submit" :label="__('Save and Submit')"
                class="w-1/2 uppercase font-bold" />
        </div>
        @endif
        @endif
    </div>
</div>