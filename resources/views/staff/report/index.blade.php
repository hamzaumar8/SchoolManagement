<x-app-layout>
    @if(Auth::user()->staff->classes->count() == 1)

    @foreach(Auth::user()->staff->classes as $class)
    <x-table-card
        header="{{$class->name}} Terminal Reports for  Term {{Session::get('CurrTerm')['term']}} ({{Session::get('CurrTerm')['academic_year']}})">

        <button onclick='Livewire.emit("openModal", "staff.report.generate-reports", {{ json_encode(["classId" => $class->id, "termId" => $term->id]) }})'>Generate Report</button>

        <livewire:staff.report.student-table :classId="$class->id" :term="$term"/>
      
    </x-table-card>
    @endforeach
    @elseif(Auth::user()->staff->classes->count() > 1)
    <x-table-card
        header="Terminal Reports for Term {{Session::get('CurrTerm')['term']}} ({{Session::get('CurrTerm')['academic_year']}})">
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
                                <span>Class</span>
                            </div>
                        </th>

                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 "
                            style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>No. of Students</span>
                            </div>
                        </th>
                        <th class="font-semibold px-2 pr-4 py-3 text-left text-xs text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300 "
                            style="width: max-content;  cursor:pointer;">
                            <div class="uppercase">
                                <span>Actions</span>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody class="text-slate-800">
                    @foreach(Auth::user()->staff->classes as $class)

                    <tr class="">

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
                                    {{$class->name}}
                                </div>
                            </span>
                        </td>
                        <td class=" capitalize px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <span class="">
                                <div>
                                    {{$class->students->count()}}
                                </div>
                            </span>
                        </td>

                        <td class="pg-actions px-3 py-2 whitespace-nowrap dark:text-slate-200">

                            <div class="space-x-2">
                                <a href="{{ route('staff.attendance.show', $class->id) }}"
                                    class="px-4 py-2 text-xs font-bold uppercase cursor-pointer outline-none inline-flex justify-center items-center group transition-all ease-in duration-150 focus:ring-2 focus:ring-offset-2 hover:shadow-sm rounded-md gap-x-2 ring-blue-500 text-blue-500 border border-blue-500 hover:bg-blue-50"
                                    title="">
                                    Summary
                                </a>

                                <a href="{{ route('staff.attendance.edit', $class->id) }}"
                                    class="px-4 py-2 text-xs font-bold uppercase cursor-pointer outline-none inline-flex justify-center items-center group transition-all ease-in duration-150 focus:ring-2 focus:ring-offset-2 hover:shadow-sm rounded-md gap-x-2 ring-green-500 text-green-500 border border-green-500 hover:bg-green-50"
                                    title="">
                                    Register
                                </a>
                            </div>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>

    </x-table-card>
    @endif

</x-app-layout>