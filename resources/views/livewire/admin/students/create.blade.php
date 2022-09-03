<div>
    {{ str_replace('-', ' ', Request::path()) }}
    <form wire:submit.prevent="save" enctype="multipart/form-data">
        <div class="my-4 text-xl font-semibold text-gray-700">
            {{ __('STUDENT\'S DETAILS') }}
        </div>
        <div class="grid grid-cols-3 gap-5">
            <x-input label="First Name" type="text" placeholder="First Name" required wire:model.defer="first_name" />

            <x-input label="Surname" type="text" placeholder="Surname" required wire:model.defer="surname" />

            <x-input label="Other Name(s)" type="text" placeholder="Other Name(s)" wire:model.defer="other_name" />

            <x-native-select label="Gender" placeholder="Select gender" :options=" [
                ['value' => 'male', 'name' => 'Male'],
                ['value' => 'female', 'name' => 'Female']]" option-label="name" option-value="value"
                wire:model.defer="gender" required />

            <x-input label="Birth Date" type="date" placeholder="Birth Date" required wire:model.defer="birthdate" />

            <x-input label="Place of birth" type="text" placeholder="Place of birth" required
                wire:model.defer="birthplace" />

            <x-input label="Religion" type="text" placeholder="Religion" required wire:model.defer="religion" />

            <x-select label="Nationality" wire:model.defer="nationality" placeholder="Select a nationality"
                :async-data="route('api.nationality.index')" option-label="name" option-value="name" required />

            <x-input label="Home Town" type="text" placeholder="Home Town" required wire:model.defer="home_town" />

            <x-input label="Home / Digital address" type="text" placeholder="Home / Digital address" required
                wire:model.defer="home_digital_address" />

            <x-input label="Postal Address" type="text" placeholder="Postal Address"
                wire:model.defer="postal_address" />

            <x-input label="First Language" type="text" placeholder="First Language" required
                wire:model.defer="first_language" />

            <x-input label="Previous School (If Any)" type="text" placeholder="Previous School (If Any)"
                wire:model.defer="previous_school" />

            <x-input label="Email" type="email" placeholder="Email" wire:model.defer="email" />

            <x-select label="Class" wire:model.defer="class_id" placeholder="Select class"
                :async-data="route('api.classes.index')" option-label="name" option-value="id" required />

            <x-native-select label="Class Type" placeholder="Select class type" :options=" [
                    ['value' => 'A', 'name' => 'A'],
                    ['value' => 'B', 'name' => 'B']]" option-label="name" option-value="value"
                wire:model.defer="class_type" required />

            <x-native-select label="Term" placeholder="Select Term" :options="[['value' => '1', 'name' => 'Term 1 '],
                    ['value' => '2', 'name' => 'Term 2 '],
                    ['value' => '3', 'name' => 'Term 3']]" option-label="name" option-value="value"
                wire:model.defer="term" required />

            <x-native-select label="Accomodation Type" placeholder="Select Accomodation Type" :options=" [
                    ['value' => 'day', 'name' => 'Day'],
                    ['value' => 'boarding', 'name' => 'Boarding']]" option-label="name" option-value="value"
                wire:model.defer="term" required />

            <x-inputs.maskable label="Phone (If Any)" mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']"
                placeholder="Phone (If Any)" required wire:model.defer="phone" />

            <x-input label="Date Adnitted" type="date" placeholder="Date Adnitted" wire:model.defer="date_admitted" />

            <div class="">
                <x-auth-label for="" :value="__('Health Problems/Allergies? ')" />
                <div class="flex">
                    <div class="mr-4">
                        <x-radio id="no" label="No" wire:model.defer="hpa" />
                    </div>
                    <div class="">
                        <x-radio id="yes" label="Yes" wire:model.defer="hpa" />
                    </div>
                </div>
            </div>

            <div class="">
                <x-auth-label for="picture" :value="__('Picture')" />
                <x-auth-input type="file" wire:model.defer="picture" class="w-full mb-4 bg-indigo-400" />
            </div>
        </div>
        <!-- Mother Datails -->
        <div class="my-4 text-xl font-semibold text-gray-700">
            {{ __('FATHER\'S DETAILS') }}
        </div>
        <div class="grid grid-cols-3 gap-5">
            <x-input label="Full Name" type="text" placeholder="Full Name" required
                wire:model.defer="father_full_name" />

            <x-input label="Email" type="text" placeholder="Email" required wire:model.defer="father_email" />

            <x-inputs.maskable label="Phone Number" mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']"
                placeholder="Phone Number" required wire:model.defer="father_phone_number" />

            <x-input label="Occupation" type="text" placeholder="Occupation" required
                wire:model.defer="father_occupation" />

            <x-input label="Home / Digital Address" type="text" placeholder="Home / Digital Address" required
                wire:model.defer="father_home_digital_address" />

            <x-input label="Postal address" type="text" placeholder="Postal address" required
                wire:model.defer="father_postal_address" />

            <div class="">
                <x-auth-label for="father_picture" :value="__('Picture')" />
                <x-auth-input type="file" wire:model.defer="father_picture" class="w-full mb-4 bg-indigo-400" />
            </div>
        </div>

        <!-- Mother Details -->
        <div class="my-4 text-xl font-semibold text-gray-700">
            {{ __('MOTHER\'S DETAILS') }}
        </div>
        <div class="grid grid-cols-3 gap-5">
            <x-input label="Full Name" type="text" placeholder="Full Name" wire:model.defer="mother_full_name" />

            <x-input label="Email" type="text" placeholder="Email" wire:model.defer="mother_email" />

            <x-inputs.maskable label="Phone Number" mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']"
                placeholder="Phone Number" required wire:model.defer="mother_phone_number" />

            <x-input label="Occupation" type="text" placeholder="Occupation" wire:model.defer="mother_occupation" />

            <x-input label="Home / Digital Address" type="text" placeholder="Home / Digital Address"
                wire:model.defer="mother_home_digital_address" />

            <x-input label="postal address" type="text" placeholder="postal address"
                wire:model.defer="mother_postal_address" />

            <div class="">
                <x-auth-label for="mother_picture" :value="__('Picture')" />
                <x-auth-input type="file" wire:model.defer="mother_picture" class="w-full mb-4 bg-indigo-400" />
            </div>
        </div>

        <!-- Guardian Details -->
        <div class="my-4 text-xl font-semibold text-gray-700">
            {{ __('GUARDIAN\'S DETAILS') }}
        </div>
        <div class="grid grid-cols-3 gap-5">
            <x-input label="Full Name" type="text" placeholder="Full Name" wire:model.defer="mother_full_name" />

            <x-input label="Email" type="text" placeholder="Email" wire:model.defer="mother_email" />

            <x-inputs.maskable label="Phone Number" mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']"
                placeholder="Phone number" required wire:model.defer="mother_phone_number" />

            <x-input label="Occupation" type="text" placeholder="Occupation" wire:model.defer="mother_occupation" />

            <x-input label="Home / Digital Address" type="text" placeholder="Home / Digital Address"
                wire:model.defer="mother_home_digital_address" />

            <x-input label="postal address" type="text" placeholder="postal address"
                wire:model.defer="mother_postal_address" />


            <x-native-select label="Relation to Student: " placeholder="Select Select one" :options="[['value' => 'uncle', 'name' => 'Uncle'],
                    ['value' => 'aunty', 'name' => 'Aunty'],
                    ['value' => 'sibling', 'name' => 'Sibling'],
                    ['value' => 'guardian', 'name' => 'Guardian'],
                    ['value' => 'other', 'name' => 'Other'],
                    ]" option-label="name" option-value="value" wire:model.defer="mother_relation" />

            <div class="">
                <x-auth-label for="mother_picture" :value="__('Picture')" />
                <x-auth-input type="file" wire:model.defer="mother_picture" class="w-full mb-4 bg-indigo-400" />
            </div>
        </div>

        <!-- Guardian Details -->
        <div class="my-4 text-xl font-semibold text-gray-700">
            {{ __('GUARDIAN\'S DETAILS') }}
        </div>
        <div class="grid grid-cols-3 gap-5">
            <x-input label="Full Name" type="text" placeholder="Full Name" wire:model.defer="mother_full_name" />

            <x-input label="Email" type="text" placeholder="Email" wire:model.defer="mother_email" />

            <x-inputs.maskable label="Phone Number" mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']"
                placeholder="Phone number" required wire:model.defer="mother_phone_number" />

            <x-input label="Occupation" type="text" placeholder="Occupation" wire:model.defer="mother_occupation" />

            <x-input label="Home / Digital Address" type="text" placeholder="Home / Digital Address"
                wire:model.defer="mother_home_digital_address" />

            <x-input label="postal address" type="text" placeholder="postal address"
                wire:model.defer="mother_postal_address" />


            <x-native-select label="Relation to Student: " placeholder="Select Select one" :options="[['value' => 'uncle', 'name' => 'Uncle'],
                    ['value' => 'aunty', 'name' => 'Aunty'],
                    ['value' => 'sibling', 'name' => 'Sibling'],
                    ['value' => 'guardian', 'name' => 'Guardian'],
                    ['value' => 'other', 'name' => 'Other'],
                    ]" option-label="name" option-value="value" wire:model.defer="mother_relation" />

            <div class="">
                <x-auth-label for="mother_picture" :value="__('Picture')" />
                <x-auth-input type="file" wire:model.defer="mother_picture" class="w-full mb-4 bg-indigo-400" />
            </div>
        </div>


        <!-- Guardian Details -->
        <div class="my-4 text-xl font-semibold text-gray-700">
            {{ __('EMERGENCY CONTACT 1') }}
        </div>
        <div class="grid grid-cols-2 gap-5">
            <x-input label="Contact Name" type="text" placeholder="Contact Name" wire:model.defer="contact_name"
                required />

            <x-inputs.maskable label="Phone Number" mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']"
                placeholder="Phone number" required wire:model.defer="contact_phone_number" required />
        </div>

        <!-- Guardian Details -->
        <div class="my-4 text-xl font-semibold text-gray-700">
            {{ __('EMERGENCY CONTACT 2') }}
        </div>
        <div class="grid grid-cols-2 gap-5">
            <x-input label="Contact Name" type="text" placeholder="Contact Name" wire:model.defer="contact_name2" />

            <x-inputs.maskable label="Phone Number" mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']"
                placeholder="Phone number" required wire:model.defer="contact_phone_number2" />
        </div>


        <div class="flex items-center justify-end mt-4">
            <x-button rose type="submit" spinner="save" :label="__('Add')" />
        </div>
    </form>
</div>