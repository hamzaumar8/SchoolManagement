<x-app-layout>
    <x-table-card header="CLass REgister for  {{$classes->name}}">
        <livewire:staff.attendance.register :classes="$classes" />
    </x-table-card>
</x-app-layout>