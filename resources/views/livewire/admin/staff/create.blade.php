<div>
    <form wire:submit.prevent="submit" enctype="multipart/form-data">
        <div class="grid grid-cols-3 gap-5 !text-slate-500">
            <div class="col-span-2">
                <div class="grid grid-cols-2 gap-5">

                    <div class="mb-4">
                        <x-input label="Staff Number" class="uppercase" type="text" Placeholder="Staff Number" required
                            wire:model.defer="staff_number" />
                    </div>


                    <div class="mb-4">
                        <x-native-select label="Staff Type" placeholder="Select one" :options="[
                    ['value' => 'administrator', 'name' => 'Administrator'],
                    ['value' => 'teacher', 'name' => 'Teacher'],
                    ['value' => 'non-teaching', 'name' => 'Non Teaching']]" option-label="name" option-value="value"
                            wire:model.defer="staff_type" />
                    </div>

                    <div class="mb-4">
                        <x-native-select label="Title" placeholder="Select one" :options="[
                            ['value' => 'Prof.', 'name' => 'Prof'],
                            ['value' => 'Dr.', 'name' => 'Dr'],
                            ['value' => 'Rev.', 'name' => 'Rev'],
                            ['value' => 'Mr.', 'name' => 'Mr'],
                            ['value' => 'Mrs.', 'name' => 'Mrs'],
                            ['value' => 'Miss', 'name' => 'Miss'],
                            ['value' => 'Ms.', 'name' => 'Ms']]" option-label="name" option-value="value"
                            wire:model.defer="title" />
                    </div>

                    <div class="mb-4">
                        <x-input label="Full Name" class="uppercase" type="text" wire:model.defer="full_name" />
                    </div>

                    <div class="mb-4">
                        <x-native-select label="Campus" placeholder="Select Campus" :options=" [
                    ['value' => 'north', 'name' => 'North'],
                    ['value' => 'south', 'name' => 'South'],
                    ]" option-label="name" option-value="value" class="uppercase" wire:model.defer="campus" required />
                    </div>

                    <div class="mb-4">
                        <x-input label="Email" class="uppercase" type="email" placeholder="Email" required
                            wire:model.defer="email" />
                    </div>


                    <div class="mb-4">
                        <x-inputs.maskable label="Phone Number 1"
                            mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']"
                            placeholder="Phone Number 1" class="uppercase" wire:model.defer="phone1" required />
                    </div>

                    <div class="mb-4">
                        <x-inputs.maskable label="Phone Number 2 (Optional)"
                            mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']"
                            placeholder="Phone Number 2 (optional)" class="uppercase" wire:model.defer="phone2" />
                    </div>

                    <x-native-select label="Gender" placeholder="Select gender"
                        :options=" [['value' => 'male', 'name' => 'Male'],['value' => 'female', 'name' => 'Female']]"
                        option-label="name" option-value="value" class="uppercase" wire:model.defer="gender" required />

                    <div class="mb-4">
                        <x-input label="Birth Date" class="uppercase" type="date" required
                            wire:model.defer="birthdate" />
                    </div>

                    <div class="mb-4">
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
                    </div>

                    <div class="mb-4">
                        <x-native-select label="Marital Status" placeholder="Select Marital Status" :options=" [
                    ['value' => 'single', 'name' => 'Single'],
                    ['value' => 'married', 'name' => 'Married'],
                    ['value' => 'separated', 'name' => 'Separated'],
                    ['value' => 'divorced', 'name' => 'divorced'],
                    ['value' => 'widow', 'name' => 'widow'],
                    ]" option-label="name" option-value="value" class="uppercase" wire:model.defer="marital_status"
                            required />
                    </div>

                    <div class="mb-4 col-span-2">
                        <x-textarea label="Residential Address" placeholder="Enter Residential Address"
                            wire:model.defer="residential_address" />
                    </div>
                </div>
            </div>
            <div class="">
                <div class="mb-4 text-lg font-semibold text-indigo-900">
                    {{ __('Staff Passport Picture') }}
                </div>
                <div class="">
                    <div class="pb-4">
                        <div class="text-red-500 text-sm font-semibold">
                            <p>Please upload a passport size photo of yourself. </p>
                            <p>The size of the image should not be more than 100KB. </p>
                            <p>The background colour of the image should be white. </p>
                            <p><strong>N.B: The image you use will not be changed. So use a most recent passport
                                    sized
                                    picture of yourself!</strong></p>
                        </div>
                    </div>
                    <div>
                        <div class="relative flex justify-center items-center">
                            <div
                                class="relative flex justify-center items-center h-[250px] w-[250px] border border-solid overflow-hidden rounded-2xl border-gray-300">
                                @if($passport_picture)
                                <img src="{{$passport_picture->temporaryUrl()}}" class="w-full h-full" alt="">
                                @else
                                <a href="javascript:;"
                                    onclick="document.getElementById('passport_picture').click(); return false;"
                                    class="text-center">
                                    <i class="mb-4 fa fa-plus text-gray-400" aria-hidden="true"></i>
                                    <h5 class="text-gray-400">New Passport Picture</h5>
                                </a>
                                <div wire:loading wire:target="passport_picture">Uploading...</div>
                                @endif
                            </div>
                        </div>
                        <div class="my-4">
                            <button
                                class="inline-flex items-center justify-center px-4 py-2 bg-indigo-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150 w-full"
                                onclick="document.getElementById('passport_picture').click(); return false;">Upload
                                passport
                                picture
                            </button>
                            <input id="passport_picture" type="file" name="passport_picture"
                                wire:model.defer="passport_picture" class="invisible" />
                            @error('passport_picture') <p class="text-red-500">{{$message}}</p> @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-end">
            <x-button blue type="submit" spinner="submit" :label="__('Add Staff')" class="uppercase" />
        </div>
    </form>
</div>