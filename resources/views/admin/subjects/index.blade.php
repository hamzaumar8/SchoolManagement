<x-app-layout>
    <x-table-card header="Subjects List">
        <x-slot name="headerActions">
            <x-button blue onclick="Livewire.emit('openModal', 'admin.subject.add-subject')">Add Subject</x-button>
        </x-slot>
        <!--  -->
        <livewire:admin.subject.table />
    </x-table-card>
</x-app-layout>