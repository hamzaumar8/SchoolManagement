<x-app-layout>
    @if(Auth::user()->staff->classes->count() == 1)

    @foreach(Auth::user()->staff->classes as $class)
    <x-table-card
        header="{{$class->name}} {{$class->house_name}} Terminal Reports for  Term {{$term->term}} ({{$term->academic_year}})">

      @if($class->students->count() > 0)
        <div>
            <div class="text-red-500">
                <p><strong>NB:</strong></p>
                <p>Click on Generate Report button and set the reopen date for next term to generate terminal reports for each student.</p>
                <p>Make sure to genreate report each time there is any changes in student assesment and attendance.</p>
            </div>
           
            <button class="outline-none inline-flex justify-center items-center group transition-all ease-in duration-150 focus:ring-2 focus:ring-offset-2 hover:shadow-sm disabled:opacity-80 disabled:cursor-not-allowed rounded gap-x-2 text-sm px-4 py-2 ring-rose-500 text-white bg-rose-500 hover:bg-rose-600 hover:ring-rose-600 dark:ring-offset-slate-800 dark:bg-rose-700 dark:ring-rose-700 dark:hover:bg-rose-600 dark:hover:ring-rose-600" spinner="openModal" onclick='Livewire.emit("openModal", "staff.report.generate-reports", {{ json_encode(["classId"=>$class->id, "termId"=>$term->id]) }})'>Generate Report</button>
        </div>
        @endif

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
                                    {{$class->name}}   ({{$class->house_name}})
                                </div>
                            </span>
                        </td>

                        <td class="pg-actions px-3 py-2 whitespace-nowrap dark:text-slate-200">
                            <div class="space-x-2">
                                <a href="{{ route('staff.report.class',[ $class->id, $class->name]) }}"
                                    class="px-4 py-2 text-xs font-bold uppercase cursor-pointer outline-none inline-flex justify-center items-center group transition-all ease-in duration-150 focus:ring-2 focus:ring-offset-2 hover:shadow-sm rounded-md gap-x-2 ring-blue-500 text-blue-500 border border-blue-500 hover:bg-blue-50"
                                    title="">
                                    view
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