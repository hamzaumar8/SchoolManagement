<div>
    <div class=" grid grid-cols-4 gap-5">
        @foreach ($subjects as $subject)
        <div class="relative">
            <input type="checkbox" name="" wire:model="checkboxes.{{ $subject->id }}" />
            <div>{{$subject->name}}</div>
        </div>
        @endforeach
    </div>

    <div class="space-x-2 flex justify-end mt-3">
        <x-button blue spinner="addsubject" wire:click="addsubject" :label="__('Add Subjects')" />
        {{--<!-- <x-button blue wire:click="cancel" spinner="cancel" :label="__('Cancel')" /> -->--}}
    </div>
</div>