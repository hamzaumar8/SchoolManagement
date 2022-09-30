<x-app-layout>
    <x-table-card header="Add subjects to {{$class->name}}">

        <livewire:admin.classes.add-subject :class="$class" />

    </x-table-card>
</x-app-layout>