<x-app-layout>
    <x-table-card
        header="{{$class->name}} {{$class->house_name}} Terminal Reports for  Term {{$term->term}} ({{$term->academic_year}})">
       @if($class->students->count() > 0)

        <div>
            <div class="text-red-500">
                <p><strong>NB:</strong></p>
                <p>Click on Generate Report button and set the reopen date for next term to generate terminal reports for each student.</p>
                <p>Make sure to genreate report each time there is any changes in student assesment and attendance.</p>
            </div>
           
            <button class="outline-none inline-flex justify-center items-center group transition-all ease-in duration-150 focus:ring-2 focus:ring-offset-2 hover:shadow-sm disabled:opacity-80 disabled:cursor-not-allowed rounded gap-x-2 text-sm px-4 py-2 ring-rose-500 text-white bg-rose-500 hover:bg-rose-600 hover:ring-rose-600
    dark:ring-offset-slate-800 dark:bg-rose-700 dark:ring-rose-700
    dark:hover:bg-rose-600 dark:hover:ring-rose-600" spinner="openModal" onclick='Livewire.emit("openModal", "staff.report.generate-reports", {{ json_encode(["classId"=>$class->id, "termId"=>$term->id]) }})'>Generate Report</button>

        </div>
        @endif

        <livewire:staff.report.student-table :classId="$class->id" :term="$term"/>
    </x-table-card>
</x-app-layout>