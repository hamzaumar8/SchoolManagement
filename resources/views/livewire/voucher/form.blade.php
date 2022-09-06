<div>
    <form wire:submit.prevent="submit" enctype="multipart/form-data">
        <div>
            <div class="my-4 text-xl font-bold text-indigo-900 border-b dark:border-0 py-2.5">
                {{ __('STUDENT\'S DETAILS') }}
            </div>
            <div class="grid grid-cols-3 gap-5">

                <div class="mb-4">
                    <x-auth-label for="surname" :value="__('Surname')" />
                    <x-auth-input id="surname" class="block mt-1 w-full uppercase" type="text" name="surname" required
                        wire:model.defer="surname" />
                    @error('surname') <p class="text-red-500">{{$message}}</p> @enderror
                </div>

                <div class="mb-4">
                    <x-auth-label for="first_name" :value="__('First Name')" />
                    <x-auth-input id="first_name" class="block mt-1 w-full uppercase" type="text" name="first_name"
                        required wire:model.defer="first_name" />
                    @error('first_name') <p class="text-red-500">{{$message}}</p> @enderror
                </div>

                <div class="mb-4">
                    <x-auth-label for="other_name" :value="__('Other Name(s)')" />
                    <x-auth-input id="other_name" class="block mt-1 w-full uppercase" type="text" name="other_name"
                        wire:model.defer="other_name" />
                    @error('other_name') <p class="text-red-500">{{$message}}</p> @enderror
                </div>

                <x-native-select label="Gender" placeholder="Select gender" :options=" [
                ['value' => 'male', 'name' => 'Male'],
                ['value' => 'female', 'name' => 'Female']]" option-label="name" option-value="value" class="uppercase"
                    wire:model.defer="gender" required />

                <div class="mb-4">
                    <x-auth-label for="birthdate" :value="__('Birth Date')" />
                    <x-auth-input id="birthdate" class="block mt-1 w-full uppercase" type="date" name="birthdate"
                        required wire:model.defer="birthdate" />
                    @error('birthdate') <p class="text-red-500">{{$message}}</p> @enderror
                </div>

                <div class="mb-4">
                    <x-auth-label for="birthplace" :value="__('Place of birth')" />
                    <x-auth-input id="birthplace" class="block mt-1 w-full uppercase" type="text" name="birthplace"
                        required wire:model.defer="birthplace" />
                    @error('birthplace') <p class="text-red-500">{{$message}}</p> @enderror
                </div>


                <x-native-select label="Religion" placeholder="Select Religion" :options=" [
                    ['value' => 'Christianity', 'name' => 'Christianity'],
                    ['value' => 'Islam', 'name' => 'Islam'],
                    ['value' => 'Traditional African', 'name' => 'Traditional African'],
                    ['value' => 'Hinduism', 'name' => 'Hinduism'],
                    ['value' => 'Buddhism', 'name' => 'Buddhism'],
                    ['value' => 'Atheism', 'name' => 'Atheism'],
                    ['value' => 'Agnostic', 'name' => 'Agnostic'],
                    ['value' => 'Folk Religion', 'name' => 'Folk Religion'],
                    ]" option-label="name" option-value="value" class="uppercase" wire:model.defer="religion"
                    required />


                <x-select label="Nationality" wire:model.defer="nationality" placeholder="Select a nationality"
                    :async-data="route('api.nationality.index')" option-label="name" option-value="name"
                    class="uppercase" required />

                <div class="mb-4">
                    <x-auth-label for="home_town" :value="__('Home Town')" />
                    <x-auth-input id="home_town" class="block mt-1 w-full uppercase" type="text" name="home_town"
                        required wire:model.defer="home_town" />
                    @error('home_town') <p class="text-red-500">{{$message}}</p> @enderror
                </div>

                <div class="mb-4">
                    <x-auth-label for="home_digital_address" :value="__('Home / Digital Address')" />
                    <x-auth-input id="home_digital_address" class="block mt-1 w-full uppercase" type="text"
                        name="home_digital_address" required wire:model.defer="home_digital_address" />
                    @error('home_digital_address') <p class="text-red-500">{{$message}}</p> @enderror
                </div>

                <div class="mb-4">
                    <x-auth-label for="postal_address" :value="__('Postal Address')" />
                    <x-auth-input id="postal_address" class="block mt-1 w-full uppercase" type="text"
                        name="postal_address" required wire:model.defer="postal_address" />
                    @error('postal_address') <p class="text-red-500">{{$message}}</p> @enderror
                </div>

                <div class="mb-4">
                    <x-auth-label for="first_language" :value="__('First Language')" />
                    <x-auth-input id="first_language" class="block mt-1 w-full uppercase" type="text"
                        name="first_language" required wire:model.defer="first_language" />
                    @error('first_language') <p class="text-red-500">{{$message}}</p> @enderror
                </div>

                <div class="mb-4">
                    <x-auth-label for="previous_school" :value="__('Previous School (If Any)')" />
                    <x-auth-input id="previous_school" class="block mt-1 w-full uppercase" type="text"
                        name="previous_school" wire:model.defer="previous_school" />
                    @error('previous_school') <p class="text-red-500">{{$message}}</p> @enderror
                </div>

                <div class="mb-4">
                    <x-auth-label for="email" :value="__('Email')" />
                    <x-auth-input id="email" class="block mt-1 w-full uppercase" type="email" name="email" required
                        wire:model.defer="email" />
                    @error('email') <p class="text-red-500">{{$message}}</p> @enderror
                </div>

                <x-select label="Class" wire:model.defer="class_id" placeholder="Select class"
                    :async-data="route('api.classes.index')" option-label="name" class="uppercase" option-value="id"
                    required />

                <x-native-select label="Class Type" placeholder="Select class type" :options=" [
                    ['value' => 'A', 'name' => 'A'],
                    ['value' => 'B', 'name' => 'B']]" option-label="name" option-value="value" class="uppercase"
                    wire:model.defer="class_type" required />

                <x-native-select label="Term" placeholder="Select Term" :options="[['value' => '1', 'name' => 'Term 1 '],
                    ['value' => '2', 'name' => 'Term 2 '],
                    ['value' => '3', 'name' => 'Term 3']]" option-label="name" option-value="value" class="uppercase"
                    wire:model.defer="term" required />

                <x-native-select label="Accomodation Type" placeholder="Select Accomodation Type" :options=" [
                    ['value' => 'day', 'name' => 'Day'],
                    ['value' => 'boarding', 'name' => 'Boarding']]" option-label="name" option-value="value"
                    class="uppercase" wire:model.defer="term" required />

                <x-inputs.maskable label="Phone (If Any)"
                    mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']" placeholder="Phone (If Any)"
                    wire:model.defer="phone" />

                <x-native-select label="Health Problems/Allergies?" placeholder="Select Health Problems/Allergies?"
                    :options=" [
                    ['value' => 'no', 'name' => 'No'],
                    ['value' => 'yes', 'name' => 'Yes']]" option-label="name" option-value="value" class="uppercase"
                    wire:model.defer="hpa" required />

            </div>
        </div>

        <div class="py-5">
            <div class="my-4 text-xl font-bold text-indigo-900 border-b dark:border-0 py-2.5 uppercase">
                {{ __('STUDENT\'S Passport Picture') }}
            </div>
            <div class="grid grid-cols-3 gap-4">
                <div class="col-span-2">
                    <div class="text-red-500 font-semibold">
                        <p>Please upload a passport size photo of yourself. </p>
                        <p>The size of the image should not be more than 100KB. </p>
                        <p>The background colour of the image should be white. </p>
                        <p><strong>N.B: The image you use will not be changed. So use a most recent passport sized
                                picture of yourself!</strong></p>
                    </div>
                </div>
                <div>
                    <div class="relative flex justify-center items-center">
                        <div
                            class="relative flex justify-center items-center h-[250px] w-[250px] border border-solid overflow-hidden rounded-2xl border-gray-300">
                            <!-- <img src="https://application.ucc.edu.gh/public/static/images/photo_placeholder.png" class="w-full h-full" alt=""> -->
                            @if($picture)
                            <img src="{{$picture->temporaryUrl()}}" class="w-full h-full" alt="">
                            @elseif($saved_picture)
                            <img src="{{$saved_picture}}" class="w-full h-full" alt="">
                            @else
                            <a href="javascript:;" onclick="document.getElementById('picture').click(); return false;"
                                class="text-center">
                                <i class="mb-4 fa fa-plus text-gray-400" aria-hidden="true"></i>
                                <h5 class="text-gray-400">New Passport Picture</h5>
                            </a>
                            @endif
                        </div>
                    </div>
                    <div class="my-4">
                        <button
                            class="inline-flex items-center justify-center px-4 py-2 bg-indigo-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150 w-full"
                            onclick="document.getElementById('picture').click(); return false;">Upload passport picture
                        </button>
                        <input id="picture" type="file" name="picture" wire:model.defer="picture" class="invisible" />
                        @error('picture') <p class="text-red-500">{{$message}}</p> @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5">
            <div class="my-4 text-xl font-bold text-indigo-900 border-b dark:border-0 py-2.5 uppercase">
                {{ __('Parent(s) Details') }}
            </div>
            <div class="grid grid-cols-3 gap-4">
                <x-input label="Father's Full Name" placeholder="Father's Name" class="uppercase"
                    wire:model.defer="father_name" required />

                <x-input label="Father's Eamil" placeholder="Father's Eamil" class="uppercase"
                    wire:model.defer="father_email" required />

                <x-inputs.maskable label="Father's Phone Number"
                    mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']" placeholder="Father's Phone Number"
                    class="uppercase" wire:model.defer="father_phone_number" required />

                <x-input label="Father's Occupation" placeholder="Father's Occupation" class="uppercase"
                    wire:model.defer="father_occupation" required />

                <x-input label="Father's Home / Digital Address" placeholder="Father's Home / Digital Address"
                    class="uppercase" wire:model.defer="father_home_digital_address" required />

                <x-input label="Father's Postal Address " placeholder="Father's Postal Address " class="uppercase"
                    wire:model.defer="father_postal_address" required />

                <!-- Mother detials -->
                <x-input label="Mother's Full Name" placeholder="Mother's Name" class="uppercase"
                    wire:model.defer="mother_name" required />

                <x-input label="Mother's Eamil" placeholder="Mother's Eamil" class="uppercase"
                    wire:model.defer="mother_email" required />

                <x-inputs.maskable label="Mother's Phone Number"
                    mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']" placeholder="Mother's Phone Number"
                    class="uppercase" wire:model.defer="mother_phone_number" required />

                <x-input label="Mother's Occupation" placeholder="Mother's Occupation" class="uppercase"
                    wire:model.defer="mother_occupation" required />

                <x-input label="Mother's Home / Digital Address" placeholder="Mother's Home / Digital Address"
                    class="uppercase" wire:model.defer="mother_home_digital_address" required />

                <x-input label="Mother's Postal Address " placeholder="Mother's Postal Address " class="uppercase"
                    wire:model.defer="mother_postal_address" required />

            </div>
        </div>

        <div class="py-5">
            <div class="my-4 text-xl font-bold text-indigo-900 border-b dark:border-0 py-2.5 uppercase">
                {{ __('Emergency Information (Who To Contact In Case Of Emergency)') }}
            </div>
            <div class="pb-4">
                <div class="my-4 text-xl font-semibold text-indigo-900">
                    {{ __('Emergency Contact 1') }}
                </div>
                <div class="grid grid-cols-2 gap-4">

                    <x-input label="Contact Name 1" placeholder="Contact Name 1" class="uppercase"
                        wire:model.defer="contact_name1" required />

                    <x-inputs.maskable label="Contact Phone Number 1"
                        mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']"
                        placeholder="Contact Phone Number 1" class="uppercase" wire:model.defer="contact_phone_number1"
                        required />
                </div>
            </div>
            <div class="pb-4">
                <div class="my-4 text-xl font-semibold text-indigo-900">
                    {{ __('Emergency Contact 2') }}
                </div>
                <div class="grid grid-cols-2 gap-4">

                    <x-input label="Contact Name 2" placeholder="Contact Name 2" class="uppercase"
                        wire:model.defer="contact_name2" />

                    <x-inputs.maskable label="Contact Phone Number 2 "
                        mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']"
                        placeholder="Contact Phone Number 2" class="uppercase"
                        wire:model.defer="contact_phone_number2" />
                </div>
            </div>
        </div>

        <div class="flex items-center justify-between mt-4 space-x-5">
            <x-button wire:click.prevent="save" spinner="save" :label="__('Save and Continue later')"
                class="w-1/2 inline-flex bg-indigo-800 border border-transparent  text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150 font-bold" />

            <x-button rose type="submit" spinner="submit" :label="__('Save and Submit')"
                class="w-1/2 uppercase font-bold" />
        </div>
    </form>
</div>