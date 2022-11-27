<x-app-layout>
    <x-table-card header="Assesment Sheet For students of {{$classes->name}} ({{$classes->house_name}})">

        <div class="flex items-center flex-none">
            <h6 class="mb-0 font-bold uppercase text-sm">Subject: {{$subject->name}}</h6>
        </div>

        <!-- Crech -->
        @if($classes->class_type == 'creche')

        <h1>{{$classes->class_type}}</h1>jm

        <!-- Kindergaten -->
        @elseif($classes->class_type == 'nursery')

        <livewire:staff.grade.nursery-student-table :classes="$classes" :subject="$subject" />

        <!-- Kindergaten -->
        @elseif($classes->class_type == 'kg')

        <livewire:staff.grade.assesment.junior-high-school :gradesystem="$gradesystem" />

        @elseif($classes->class_type == 'basic school' || $classes->class_type == 'junior high')
        <livewire:staff.grade.assesment.basic-school :gradesystem="$gradesystem" />
        @endif
    </x-table-card>
</x-app-layout>