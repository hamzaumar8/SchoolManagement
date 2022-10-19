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
            {{$attendance}}
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