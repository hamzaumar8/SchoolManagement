<div class="p-4">
    <div class="font-semibold font-gray-700 text-lg">Add Subject</div>

    <div class="py-2">
        <form wire:submit.prevent="editSubject">
            <div class="font-normal text-gray-600">
                <div class="my-4">
                    <x-input label="Subject Name" placeholder="Subject Name" type="text" required
                        wire:model.defer="name" />
                </div>
                <div class="my-4">
                    <x-input label="Subject Code (oprional)" placeholder="Example I.C.T" type="text"
                        wire:model.defer="code" />
                </div>
            </div>

            <div class=" space-x-2 flex justify-end mt-3">
                <x-button blue type="submit" spinner="addSubject" :label="__('Submit')" />
                <x-button outline rose wire:click="cancel" spinner="cancel" :label="__('Cancel')" />
            </div>
        </form>
    </div>

</div>