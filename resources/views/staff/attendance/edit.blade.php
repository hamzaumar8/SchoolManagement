{{-- <x-app-layout>
    @foreach(Auth::user()->staff->classes as $classes)
    <x-table-card header="Attendance for {{$classes->name}} ">
<livewire:staff.attendance.register :classes="$classes" />
</x-table-card>
@endforeach
</x-app-layout> --}}

<x-app-layout>
    <x-table-card header="CLass Register for  {{$classes->name}}">

        <livewire:staff.attendance.register :classes="$classes" />
    </x-table-card>


</x-app-layout>