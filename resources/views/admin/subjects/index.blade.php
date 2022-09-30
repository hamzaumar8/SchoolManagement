<x-app-layout>
    <x-table-card header="Subjects List">
        <x-slot name="headerActions">
            <x-button blue onclick="Livewire.emit('openModal', 'admin.subject.add-subject')"
                class="uppercase text-xs font-bold rounded-md">Add
                Subject</x-button>
        </x-slot>
        <!--  -->
        <livewire:admin.subject.table />
    </x-table-card>
</x-app-layout>