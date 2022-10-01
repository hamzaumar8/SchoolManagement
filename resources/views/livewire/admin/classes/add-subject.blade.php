<div class="p-4">
    <div class="font-semibold font-gray-700 text-lg">Add Class</div>

    <div class="py-2">
        <form wire:submit.prevent="addClass">
            <div class="font-normal text-gray-600">
                <div class="my-4">
                    <x-input label="Class Name" placeholder="Class Name" type="text" required wire:model.defer="name" />
                </div>
                <div class="my-4">
                    <x-input label="Class Code (oprional)" placeholder="Example I.C.T" type="text"
                        wire:model.defer="code" />
                </div>
            </div>

            <div class=" space-x-2 flex justify-end mt-3">
                <x-button blue type="submit" spinner="addClass" :label="__('Submit')" />
                <x-button outline rose wire:click="cancel" spinner="cancel" :label="__('Cancel')" />
            </div>
        </form>
    </div>

</div>