<x-app-layout>
    <x-slot name="header">
        <h6 class="mb-0 font-bold capitalize">{{ __('addmissions.') }}</h6>
    </x-slot>

    <x-table-card header="Admission List">
        <x-slot name="headerActions">
            <x-link href=" {{ route('addmissiongenerate.create') }}">Generate admission token</x-link>
        </x-slot>
        <livewire:addmission-table />
    </x-table-card>
</x-app-layout>