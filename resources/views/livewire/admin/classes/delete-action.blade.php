<div class="p-3">
    <div class="font-semibold font-gray-700 text-lg">Delete Class</div>

    <div class="py-2">
        @if($classId)
        Class Id: {{ $classId }}
        @endif
        @if($classIds)
        Class Ids: @json($classIds)
        @endif
        <div class="font-normal text-gray-600">Are you sure you want to delete this class?</div>

        <div class="space-x-2 flex justify-end mt-3">
            <x-button rose spinner="confirm" wire:click="confirm" :label="__('Delete')" />
            <x-button blue wire:click="cancel" spinner="cancel" :label="__('Cancel')" />
        </div>
    </div>

</div>