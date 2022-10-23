<x-app-layout>
    <x-table-card header="CLass Register for  {{$classes->name}}">

        @if(now()->format('D') == "Sat" || now()->format('D') == "Sun")
        <div>{{now()->format('D')}}</div>
        @else
        <livewire:staff.attendance.register :classes="$classes" />
        @endif
    </x-table-card>


</x-app-layout>