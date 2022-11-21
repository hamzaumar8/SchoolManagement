<x-app-layout>
    <style>
    table.table input {
        border: 1px solid;
        padding: 2px 5px;
        width: 70px;
    }
    </style>
    <x-table-card header="Assesment Sheet For {{$classes->class_type}}">
        @if($classes->class_type == 'creche')
        <h1>{{$classes->class_type}}</h1>
        @elseif($classes->class_type == 'kg')
        <livewire:staff.grade.assesment.junior-high-school :gradesystem="$gradesystem" />
        @elseif($classes->class_type == 'basic school')
        <livewire:staff.grade.assesment.basic-school :gradesystem="$gradesystem" />
        @endif
    </x-table-card>
</x-app-layout>