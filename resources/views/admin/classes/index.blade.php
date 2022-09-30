<x-app-layout>
    <x-table-card header="Class List">
        <x-slot name="headerActions">
            <x-button blue onclick="Livewire.emit('openModal', 'admin.subject.add-subject')"
                class="uppercase text-xs font-bold rounded-md">Add
                Class</x-button>
        </x-slot>
        <!--  -->
        <livewire:admin.class.table />
    </x-table-card>
</x-app-layout>