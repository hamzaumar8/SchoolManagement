<x-app-layout>
    @foreach(Auth::user()->staff->classes as $classes)
    <x-table-card header="Attendance for {{$classes->name}} ">
        <div class="table-responsive">

            @foreach ($classes->students as $student)

            <td class="flex">
                <div class="custom-control custom-radio d-inline">
                    <input type="radio" id="radio-{{ $student->id }}-on" name="status[{{ $student->id }}]" value="on"
                        class="custom-control-input" required>
                    <label class="custom-control-label" for="radio-{{ $student->id }}-on">Present</label>
                </div>
                <div class="custom-control custom-radio d-inline">
                    <input type="radio" id="radio-{{ $student->id }}-off" name="status[{{ $student->id }}]" value="off"
                        class="custom-control-input" required>
                    <label class="custom-control-label" for="radio-{{ $student->id }}-off">Absent</label>
                </div>

                @endforeach


                <table
                    class="table power-grid-table rounded-lg min-w-full border border-slate-200 dark:bg-slate-600 dark:border-slate-500">
                    <thead
                        class="shadow-sm bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-500">
                        <tr class="">

                            <!-- <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 tracking-wider">
                            <div class="">
                                <label class="flex items-center space-x-3">
                                    <input class="h-4 w-4" type="checkbox" wire:click="selectCheckboxAll()"
                                        wire:model.defer="checkboxAll">
                                </label>
                            </div>
                        </th> -->

                            <th
                                class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 ">
                                <div class="">
                                    <span>NO.</span>
                                </div>
                            </th>

                            <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 "
                                style="; width: max-content;  cursor:pointer;   ">
                                <div class="">
                                    <span>Name</span>
                                </div>
                            </th>

                            <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 "
                                style="; width: max-content;  cursor:pointer;   ">
                                <div class="">
                                    <span>Attendance</span>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-slate-800">
                        @foreach ($classes->students->sortByDesc('gender') as $student)

                        <tr
                            class="border border-slate-100 dark:border-slate-400 hover:bg-slate-50 dark:bg-slate-700 dark:odd:bg-slate-800 dark:odd:hover:bg-slate-900 dark:hover:bg-slate-700">

                            <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200 ">
                                <span class="">
                                    <div>
                                        {{ $loop->index + 1 }}
                                    </div>
                                </span>
                            </td>
                            <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200 " style=" ; ">
                                <span class="">
                                    <div>
                                        {{$student->fullname()}}
                                    </div>
                                </span>
                            </td>

                            <td class=" px-6 py-3 text-left text-xs font-medium text-slate-500 tracking-wider">
                                <div class="">
                                    <label class="flex cursor-pointer items-center space-x-3">
                                        <input class="h-4 w-4" type="checkbox" wire:model.defer="checkboxValues"
                                            value="1">
                                    </label>
                                </div>
                            </td>


                            <!-- <td class="pg-actions px-3 py-2 whitespace-nowrap dark:text-slate-200">

                            <div class="w-full md:w-auto">



                                <a href="http://127.0.0.1:8000/admin/classes/1"
                                    class="px-4 py-2 text-xs font-bold uppercase cursor-pointer outline-none inline-flex justify-center items-center group transition-all ease-in duration-150 focus:ring-2 focus:ring-offset-2 hover:shadow-sm rounded-md gap-x-2 ring-yellow-500 text-yellow-500 border border-yellow-500 hover:bg-yellow-50"
                                    title="">
                                    View
                                </a>
                            </div>
                        </td> -->
                        </tr>

                        @endforeach
                    </tbody>
                </table>
        </div>
    </x-table-card>
    @endforeach
</x-app-layout>