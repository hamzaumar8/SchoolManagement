<div>
    <form wire:submit.prevent="submit" enctype="multipart/form-data">
        <div class="my-4 text-xl font-semibold text-gray-700">
            {{ __('STUDENT\'S DETAILS') }}
        </div>
        <div class="grid grid-cols-3 gap-4">
            <div class="mb-4">
                <x-auth-label for="first_name" :value="__('First Name')" />
                <x-auth-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" required
                    wire:model.defer="first_name" />
                @error('first_name') <p class="text-red-500">{{$message}}</p> @enderror
            </div>

            <div class="mb-4">
                <x-auth-label for="surname" :value="__('Surname')" />
                <x-auth-input id="surname" class="block mt-1 w-full" type="text" name="surname" required
                    wire:model.defer="surname" />
                @error('surname') <p class="text-red-500">{{$message}}</p> @enderror
            </div>

            <div class="mb-4">
                <x-auth-label for="other_name" :value="__('Other Name(s)')" />
                <x-auth-input id="other_name" class="block mt-1 w-full" type="text" name="other_name"
                    wire:model.defer="other_name" />
                @error('other_name') <p class="text-red-500">{{$message}}</p> @enderror
            </div>

            <x-native-select label="Gender" placeholder="Select gender" :options=" [
                ['value' => 'male', 'name' => 'Male'],
                ['value' => 'female', 'name' => 'Female']]" option-label="name" option-value="value"
                wire:model.defer="gender" required />

            <div class="mb-4">
                <x-auth-label for="birthdate" :value="__('Birth Date')" />
                <x-auth-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" required
                    wire:model.defer="birthdate" />
                @error('birthdate') <p class="text-red-500">{{$message}}</p> @enderror
            </div>

            <div class="mb-4">
                <x-auth-label for="birthplace" :value="__('Place of birth')" />
                <x-auth-input id="birthplace" class="block mt-1 w-full" type="text" name="birthplace" required
                    wire:model.defer="birthplace" />
                @error('birthplace') <p class="text-red-500">{{$message}}</p> @enderror
            </div>

            <div class="mb-4">
                <x-auth-label for="religion" :value="__('Religion')" />
                <x-auth-input id="religion" class="block mt-1 w-full" type="text" name="religion" required
                    wire:model.defer="religion" />
                @error('religion') <p class="text-red-500">{{$message}}</p> @enderror
            </div>

            <x-select label="Nationality" wire:model.defer="nationality" placeholder="Select a nationality"
                :async-data="route('api.nationality.index')" option-label="name" option-value="name" required />

            <div class="mb-4">
                <x-auth-label for="home_town" :value="__('Home Town')" />
                <x-auth-input id="home_town" class="block mt-1 w-full" type="text" name="home_town" required
                    wire:model.defer="home_town" />
                @error('home_town') <p class="text-red-500">{{$message}}</p> @enderror
            </div>

            <div class="mb-4">
                <x-auth-label for="home_digital_address" :value="__('Home / Digital Address')" />
                <x-auth-input id="home_digital_address" class="block mt-1 w-full" type="text"
                    name="home_digital_address" required wire:model.defer="home_digital_address" />
                @error('home_digital_address') <p class="text-red-500">{{$message}}</p> @enderror
            </div>

            <div class="mb-4">
                <x-auth-label for="postal_address" :value="__('Postal Address')" />
                <x-auth-input id="postal_address" class="block mt-1 w-full" type="text" name="postal_address" required
                    wire:model.defer="postal_address" />
                @error('postal_address') <p class="text-red-500">{{$message}}</p> @enderror
            </div>

            <div class="mb-4">
                <x-auth-label for="first_language" :value="__('First Language')" />
                <x-auth-input id="first_language" class="block mt-1 w-full" type="text" name="first_language" required
                    wire:model.defer="first_language" />
                @error('first_language') <p class="text-red-500">{{$message}}</p> @enderror
            </div>

            <div class="mb-4">
                <x-auth-label for="previous_school" :value="__('Previous School (If Any)')" />
                <x-auth-input id="previous_school" class="block mt-1 w-full" type="text" name="previous_school"
                    wire:model.defer="previous_school" />
                @error('previous_school') <p class="text-red-500">{{$message}}</p> @enderror
            </div>

            <div class="mb-4">
                <x-auth-label for="email" :value="__('Email')" />
                <x-auth-input id="email" class="block mt-1 w-full" type="email" name="email" required
                    wire:model.defer="email" />
                @error('email') <p class="text-red-500">{{$message}}</p> @enderror
            </div>

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

            <div class="mb-4">
                <x-auth-label for="picture" :value="__('Picture')" />
                <x-auth-input id="picture" class="block mt-1 w-full" type="file" name="picture" required
                    wire:model.defer="picture" />
                @error('picture') <p class="text-red-500">{{$message}}</p> @enderror
            </div>
        </div>

        <div class="flex items-center justify-between mt-4 space-x-2">
            <x-button rose wire:click.prevent="save" spinner="save" :label="__('Save')" class="w-1/2" />
            <x-button rose type="submit" spinner="submit" :label="__('Save and Submit')" class="w-1/2" />
        </div>
    </form>
</div>