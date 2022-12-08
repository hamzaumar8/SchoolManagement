<div class="p-4">
    <div class="font-semibold font-gray-700 text-lg">Edit Class</div>

    <div class="py-2">
        <form wire:submit.prevent="editClass">
            <div class="font-normal text-gray-600">
                <div class="mb-4 z-50">
                    <x-select label="Class Name" placeholder="Select Class Name" :async-data="route('api.classnames')"
                        seleted="" option-label="name" class="uppercase" option-value="name"
                        wire:model.defer="name" />
                </div>
                <div class="my-4">
                    <x-input label="House Name" placeholder="Example Yarkel Kubin" type="text"
                        wire:model.defer="house_name" required/>
                </div>
                <div class="mb-4">
                    <x-native-select label="Class Type" placeholder="Select one" :options=" [
                    ['value' => 'creche', 'name' => 'Creche'],
                    ['value' => 'nursery', 'name' => 'Nursery'],
                    ['value' => 'kg', 'name' => 'KG'],
                    ['value' => 'basic school', 'name' => 'Basic School'],
                    ['value' => 'junior high', 'name' => 'Junior High'],
                    ]" option-label="name" option-value="value" class="uppercase" wire:model.defer="class_type"
                        required />
                </div>
                <div class="mb-4">
                    <x-native-select label="Campus" placeholder="Select one" :options=" [
                    ['value' => 'north', 'name' => 'North'],
                    ['value' => 'south', 'name' => 'South'],
                    ]" option-label="name" option-value="value" class="uppercase" wire:model.defer="campus" required />
                </div>

                <div class="mb-4 z-50">
                    <x-select label="Class Teacher" placeholder="Select class teacher" :async-data="route('api.staffs')" option-label="full_name" class="uppercase" option-value="id"
                        wire:model.defer="staff_name" />
                </div>
            </div>

            <div class=" space-x-2 flex justify-end mt-3">
                <x-button blue type="submit" spinner="editClass" :label="__('Update')" />
                <x-button outline rose wire:click="cancel" spinner="cancel" :label="__('Cancel')" />
            </div>
        </form>
    </div>

</div>