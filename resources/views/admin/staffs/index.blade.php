<x-app-layout>
    <x-table-card header="Staffs List">
        <x-slot name="headerActions">
            <x-link href="{{ route('staffs.create') }}">
                <i class="fa fa-user-plus mr-2"></i> add
                Staff
            </x-link>
        </x-slot>
        <!--  -->
        <livewire:admin.staff.table />
    </x-table-card>
</x-app-layout>