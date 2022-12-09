<x-app-layout>
    <x-table-card header="Classes Subject Assesment lists">

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
                        <td class="capitalize px-3 py-2 whitespace-nowrap">
                            <span class="">
                                @foreach ($subjects as $subject)
                                <div class="border-b py-3 last:border-b-0 ">
                                    <div class="inline-flex item-center space-x-5">
                                        <a href=" {{ route('staff.assessment.class_subject', [$subject->class_id,$subject->subject_id]) }}"
                                            class="flex align-center hover:underline"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="text-blue-700 mr-2
                                            w-4 h-4 text-bold">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                        </svg>
                                        {{$subject->class->name}} ({{$subject->class->house_name}})</a>
                                        <span class="px-3 py-1 font-bold text-{{ $subject->subject->oneGradesSystemStatus($term->id,$subject->class_id,$subject->subject_id) == 'submitted' ? 'green' : 'red' }}-500 text-sm  bg-{{ $subject->subject->oneGradesSystemStatus($term->id,$subject->class_id,$subject->subject_id) == 'submitted' ? 'green' : 'red' }}-300 rounded-md">
                                            {{ $subject->subject->oneGradesSystemStatus($term->id,$subject->class_id,$subject->subject_id) }}
                                        </span>
                                    </div>
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