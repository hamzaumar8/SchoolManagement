<x-app-layout>
    <x-table-card header="Class List">
        <x-slot name="headerActions">
            <x-button blue spinner="openModal" onclick=" Livewire.emit('openModal', 'admin.classes.add-class' )"
                class="uppercase text-xs font-bold rounded-md">Add
                Class</x-button>
        </x-slot>
        <!--  -->
        <livewire:admin.class.table />
    </x-table-card>
</x-app-layout>