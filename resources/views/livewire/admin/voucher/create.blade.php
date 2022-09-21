<div>
    <form wire:submit.prevent="generate">
        <div class="grid grid-cols-1 gap-5">
            <x-input label="Full Name" type="text" placeholder="Full Name" wire:model.defer="name" required />

            <x-inputs.maskable label="Phone Number" mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']"
                placeholder="Phone number" required wire:model.defer="phone" />

            <x-native-select label="Campus" placeholder="Select campus" :options=" [
                ['value' => 'north', 'name' => 'North (Annex)'],
                ['value' => 'south', 'name' => 'South (Main)']]" option-label="name" option-value="value"
                wire:model.defer="campus" required />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-button rose type="submit" spinner="generate" :label="__('Generate')" />
        </div>
    </form>
</div>