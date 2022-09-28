<x-app-layout>
    <x-table-card header="Students in {{$class->name}}" back="{{ route('classes.index') }}">
        <livewire:admin.class.student-table :classId="$class->id" />
    </x-table-card>
</x-app-layout>