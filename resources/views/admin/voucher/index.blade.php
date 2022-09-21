<x-app-layout>
    <x-slot name="header">
        <h6 class="mb-0 font-bold capitalize">{{ __('Addmission Voucher') }}</h6>
    </x-slot>
    <x-table-card header="Admission Voucher">
        <x-slot name="headerActions">
            <x-link href=" {{ route('vouchers.create') }}"> <i class="fas fa-plus mr-2"></i>Generate
                admission token</x-link>
        </x-slot>
        <livewire:admin.voucher.table />
    </x-table-card>
</x-app-layout>