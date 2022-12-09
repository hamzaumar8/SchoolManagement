<div class="p-4">
    <div class="font-semibold font-gray-700 text-lg">Generate Reports</div>
    <div class="py-2">
       
        <form wire:submit.prevent="generateReports">
            <div class="font-normal text-gray-600">
                <div class="my-4">
                    <x-input label="Reopening Date" type="date"
                        wire:model.defer="reopen_date" required/>
                </div>
            </div>

            <div class=" space-x-2 flex justify-end mt-3">
                <x-button blue type="submit" spinner="generateReports" :label="__('Submit')" />
                <x-button outline rose wire:click="cancel" spinner="cancel" :label="__('Cancel')" />
            </div>
        </form>
    </div>
</div>
