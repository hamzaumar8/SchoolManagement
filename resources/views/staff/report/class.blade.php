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
            <x-button rose onclick='Livewire.emit("openModal", "staff.report.generate-reports", {{ json_encode(["classId" => $class->id, "termId" => $term->id]) }})'>Generate Report</x-button>
        </div>
        @endif

        <livewire:staff.report.student-table :classId="$class->id" :term="$term"/>
    </x-table-card>
</x-app-layout>