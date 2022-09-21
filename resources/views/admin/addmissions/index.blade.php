<x-app-layout>
    <x-table-card header="Admission List">
        <x-slot name="headerActions">
            <x-link href=" {{ route('addmission-vouchers.create') }}">Generate admission token</x-link>
        </x-slot>
        <livewire:addmission-table />
    </x-table-card>
</x-app-layout>