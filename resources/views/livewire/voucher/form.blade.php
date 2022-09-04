<div>
    <form method="POST" wire:submit.prevent="save" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <x-auth-label for="name" :value="__('Room Name')" />
            <x-auth-input id="name" class="block mt-1 w-full" type="text" name="name" required
                wire:model.defer="name" />
            @error('name') <p class="text-red-500">{{$message}}</p> @enderror
        </div>
        <div class="mb-4">
            <x-auth-label for="capacity" :value="__('Room Capacity')" />
            <x-auth-input id="capacity" class="block mt-1 w-full" type="text" name="capacity" required
                wire:model.defer="capacity" />
            @error('capacity') <p class="text-red-500">{{$message}}</p> @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-button rose type="submit" spinner="save" :label="__('Submit')" />
        </div>
    </form>
</div>