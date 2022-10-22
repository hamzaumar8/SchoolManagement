<div>
    <div class="mb-4">
        <div class="flex space-x-2">
            <div class="font-medium text-lg">Date:</div>
            <div class="flex">
                <span class="mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                    </svg>
                </span> {{$attendance->date}}
            </div>
        </div>
        <!--  -->
        <div class="flex">
            <div>
                <x-input type="date" max="{{now()->format('Y-m-d')}}" wire:model.lazy="atdate" />
            </div>
        </div>
    </div>
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
                        <span>Attendance</span>
                    </div>
                </th>
            </tr>
        </thead>
        <tbody class="text-slate-800">
            @foreach ($classes->students->sortBy('fullname()')->sortByDesc('gender') as $student)

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
                            {{$student->fullname()}}
                        </div>
                    </span>
                </td>

                <td class=" px-6 py-3 text-left text-xs font-medium text-slate-500 tracking-wider">
                    <div class="">
                        <label class="flex cursor-pointer items-center space-x-3">
                            <input type="checkbox" name="" wire:model="checkboxes.{{ $student->id }}" class="h-4 w-4" />
                        </label>
                    </div>
                </td>
            </tr>

            @endforeach
            <tr>
                <td></td>
                <td></td>
                <td class="pg-actions px-3 py-2 whitespace-nowrap dark:text-slate-200">
                    <div class="w-full md:w-auto">
                        <x-button blue spinner="addAttendance" wire:click="addAttendance('{{$attendance->id}}')"
                            :label="__('save')" />
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>