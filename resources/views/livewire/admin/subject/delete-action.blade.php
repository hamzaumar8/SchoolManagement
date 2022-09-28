<div class="p-3">
    <div class="font-semibold font-gray-700 text-lg">Delete Subject</div>

    <div class="py-2">
        @if($subjectId)
        PropertyId: {{ $subjectId }}
        @endif
        @if($subjectIds)
        PropertyIds: @json($subjectIds)
        @endif
        <div class="font-normal text-gray-600">Are you sure you want to delete this Subject?</div>

        <div class="space-x-2 flex justify-end mt-3">
            <x-button rose spinner="confirm" wire:click="confirm" :label="__('Delete')" />
            <x-button blue wire:click="cancel" spinner="cancel" :label="__('Cancel')" />
        </div>
    </div>

</div>