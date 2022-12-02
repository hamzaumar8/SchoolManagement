<x-app-layout>
    <x-table-card header="My Subject and Classeslists">

        <div class="my-3 overflow-x-auto bg-white shadow-lg rounded-lg overflow-y-auto relative ps ps--active-x">
            <table
                class=" table power-grid-table rounded-lg min-w-full border border-slate-200 dark:bg-slate-600 dark:border-slate-500">
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
                                <span>Subjects</span>
                            </div>
                        </th>

                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 "
                            style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>Classes</span>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody class="text-slate-800">
                    @foreach(Auth::user()->staff->class_subject->groupBy('subject_id') as $subjects)

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
                                    {{$subjects[0]->subject->name}}
                                </div>
                            </span>
                        </td>
                        <!-- TODO:: add a link to the class lists -->
                        <td class=" capitalize px-3 py-2 whitespace-nowrap">
                            <span class="">
                                @foreach ($subjects as $subject)
                                <div class="border-b py-3 last:border-b-0 flex align-center">
                                    <span class="mr-2"><svg xmlns=" http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="currentColor" class="text-blue-900
                                            w-5 h-5 text-bold">
                                            <path fill-rule="evenodd"
                                                d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>

                                    {{$subject->class->name}}
                                </div>
                                @endforeach
                            </span>
                        </td>


                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </x-table-card>

</x-app-layout>