<div>
    <style>
    input[type="radio"]:checked+.fa:before,
    input[type="radio"]:checked+label:before {
        content: "\f00c";
    }
    </style>
    <form wire:submit.prevent="submit" enctype="multipart/form-data">
        <div class="text-slate-600">
            <div class="my-4 text-xl font-bold text-indigo-900 border-b dark:border-0 py-2.5">
                {{ __('1. STUDENT\'S DETAILS') }}
            </div>
            <div class="grid grid-cols-3 gap-5">
                <div class=" col-span-2">
                    <div class="grid grid-cols-2 gap-5">

                        <div class="mb-4">
                            <x-input label="Surname" class="uppercase" type="text" name="surname" required
                                wire:model.defer="surname" />
                        </div>

                        <div class="mb-4">
                            <x-input label="First Name" class="uppercase" type="text" required
                                wire:model.defer="first_name" />
                        </div>

                        <div class="mb-4">
                            <x-input label="Other Name" class="uppercase" type="text" wire:model.defer="other_name" />
                        </div>

                        <x-native-select label="Gender" placeholder="Select gender"
                            :options=" [['value' => 'male', 'name' => 'Male'],['value' => 'female', 'name' => 'Female']]"
                            option-label="name" option-value="value" class="uppercase" wire:model.defer="gender"
                            required />

                        <div class="mb-4">
                            <x-input label="Birth Date" class="uppercase" type="date" required
                                wire:model.defer="birthdate" />
                        </div>

                        <div class="mb-4">
                            <x-input label="Place Of Birth" class="uppercase" type="text" required
                                wire:model.defer="birthplace" />
                        </div>

                        <div class="mb-4">
                            <x-input label="Home Town" class="uppercase" type="text" required
                                wire:model.defer="home_town" />
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
                            <x-input label="First Language" class="uppercase" type="text" required
                                wire:model.defer="first_language" />
                        </div>

                        <div class="mb-4">
                            <x-input label="Previous School" class="uppercase" type="text"
                                wire:model.defer="previous_school" required />
                        </div>

                        <x-native-select label="Previous Class" placeholder="Select Previous class" :options=" [
                            ['value' => 'Creche','name' => 'Creche'],
            ['value' => 'Nursery One','name' => 'Nursery One'],
            ['value' => 'Nursery Two','name' => 'Nursery Two'],
            ['value' => 'Kindergarten One','name' => 'Kindergarten One'],
            ['value' => 'Kindergarten Two','name' => 'Kindergarten Two'],
            ['value' => 'Primary One','name' => 'Primary One'],
            ['value' => 'Primary Two','name' => 'Primary Two'],
            ['value' => 'Primary Three','name' => 'Primary Three'],
            ['value' => 'Primary Four','name' => 'Primary Four'],
            ['value' => 'Primary Five','name' => 'Primary Five'],
            ['value' => 'Primary Six','name' => 'Primary Six'],
            ['value' => 'Junior High School One','name' => 'Junior High School One'],
            ['value' => 'Junior High School Two','name' => 'Junior High School Two'],
            ['value' => 'Junior High School Three','name' => 'Junior High School Three'],
                    ]" option-label="name" option-value="value" class="uppercase" wire:model.defer="previous_class"
                            required />
                    </div>
                </div>
                <div class="">
                    <div class="mb-4 text-lg font-semibold text-indigo-900">
                        {{ __('Student Passport Picture') }}
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
                                    @elseif($saved_passport_picture)
                                    <img src="{{asset('assets/img/addmission')}}/{{$saved_passport_picture}}"
                                        class="w-full h-full" alt="">
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
        </div>



        <div class="py-5">
            <div class="my-4 text-xl font-bold text-indigo-900 border-b dark:border-0 py-2.5 uppercase">
                {{ __('2. Particulars of Parent / Guardian Details') }}
            </div>
            <div class="grid grid-cols-3 gap-5">
                <x-input label="Father's Full Name" placeholder="Father's Name" class="uppercase"
                    wire:model.defer="father_name" required />

                <x-input label="Father's Eamil" placeholder="Father's Eamil" class="uppercase" type="email"
                    wire:model.defer="father_email" required />

                <x-inputs.maskable label="Father's Phone Number"
                    mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']" placeholder="Father's Phone Number"
                    class="uppercase" wire:model.defer="father_phone_number" required />

                <x-input label="Father's Occupation" placeholder="Father's Occupation" class="uppercase"
                    wire:model.defer="father_occupation" required />

                <x-input label="Father's Home / Digital Address" placeholder="Father's Home / Digital Address"
                    class="uppercase" wire:model.defer="father_home_digital_address" required />

                <!-- Mother detials -->
                <x-input label="Mother's Full Name" placeholder="Mother's Name" class="uppercase"
                    wire:model.defer="mother_name" required />

                <x-input label="Mother's Eamil" placeholder="Mother's Eamil" class="uppercase" type="email"
                    wire:model.defer="mother_email" required />

                <x-inputs.maskable label="Mother's Phone Number"
                    mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']" placeholder="Mother's Phone Number"
                    class="uppercase" wire:model.defer="mother_phone_number" required />

                <x-input label="Mother's Occupation" placeholder="Mother's Occupation" class="uppercase"
                    wire:model.defer="mother_occupation" required />

                <x-input label="Mother's Home / Digital Address" placeholder="Mother's Home / Digital Address"
                    class="uppercase" wire:model.defer="mother_home_digital_address" required />

            </div>

            <div class="my-4 text-lg font-semibold text-indigo-900">
                {{ __('Guardian Information (If Any)') }}
            </div>
            <!-- Guardian Information -->
            <div class="grid grid-cols-3 gap-5">
                <x-input label="Guardian's Full Name" placeholder="Guardian's Name" class="uppercase"
                    wire:model.defer="guardian_name" />

                <x-input label="Guardian's Eamil" placeholder="Guardian's Eamil" class="uppercase"
                    wire:model.defer="guardian_email" />

                <x-inputs.maskable label="Guardian's Phone Number"
                    mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']"
                    placeholder="Guardian's Phone Number" class="uppercase" wire:model.defer="guardian_phone_number" />

                <x-input label="Guardian's Occupation" placeholder="Guardian's Occupation" class="uppercase"
                    wire:model.defer="guardian_occupation" />

                <x-input label="Guardian's Home / Digital Address" placeholder="Guardian's Home / Digital Address"
                    class="uppercase" wire:model.defer="guardian_home_digital_address" />

                <x-native-select label="Guardian Relationship" placeholder="Select guardian relationship"
                    :options="[['value' => 'uncle', 'name' => 'uncle'],['value' => 'aunty', 'name' => 'aunty'],['value' => 'sibling', 'name' => 'sibling'],['value' => 'guardian', 'name' => 'guardian'],['value' => 'other', 'name' => 'other']]"
                    option-label="name" option-value="value" class="uppercase" wire:model.defer="guardian_relation" />
            </div>

            <div class="mt-5">
                <div class="grid grid-cols-3 gap-5">
                    <div class="">Is Parant / Guardian A staff or Non-Staff Of Ucc</div>
                    <div class="">
                        <x-radio id="parent_staff" left-label="U.C.C Staff" wire:model.lazy="parent_staff" value="staff"
                            name="parent_staff" class="uppercase" required />
                    </div>
                    <div class="">
                        <x-radio id="parent_staff" label="Non-U.C.C Staff" wire:model.lazy="parent_staff"
                            value="non-staff" name="parent_staff" class="uppercase" required />
                    </div>
                </div>
            </div>
        </div>


        <div class="py-5">
            <div class="my-4 text-xl font-bold text-indigo-900 border-b dark:border-0 py-2.5 uppercase">
                {{ __(' For U.c.c Staff Only') }}
            </div>
            <div class="grid grid-cols-2 gap-5 ">
                <x-input label="Personnel Number" placeholder="Enter Personnel Number" class="uppercase"
                    wire:model.defer="personnel_number" />

                <x-input label="Unit / Section / Department" placeholder="Enter Unit / Section / Department"
                    class="uppercase" wire:model.defer="unit_section_department" />

                <x-native-select label="Is pupil your registered biological child with your personal records?"
                    placeholder="Select one" :options=" [
                    ['value' => 'no', 'name' => 'No'],
                    ['value' => 'yes', 'name' => 'Yes']]" option-label="name" option-value="value" class="uppercase"
                    wire:model.defer="registered_biological_ward" />

                <x-native-select label="Is pupil your registered ward?" placeholder="Select one" :options=" [
                    ['value' => 'no', 'name' => 'No'],
                    ['value' => 'yes', 'name' => 'Yes']]" option-label="name" option-value="value" class="uppercase"
                    wire:model.defer="registered_ward" />

                <div class="col-span-2">
                    <x-textarea label="Explain (If yes)" placeholder="Explain" class="uppercase"
                        wire:model.defer="registered_ward_explain" />
                </div>
            </div>
        </div>


        <div class="py-5">
            <div class="my-4 text-xl font-bold text-indigo-900 border-b dark:border-0 py-2.5 uppercase">
                {{ __('3. Health Status') }}
            </div>
            <div class="grid grid-cols-2 gap-5">


                <x-native-select label="Is the applicant having any serious / chronic health?" placeholder="Select one"
                    :options=" [
                    ['value' => 'no', 'name' => 'No'],
                    ['value' => 'yes', 'name' => 'Yes']]" option-label="name" option-value="value" class="uppercase"
                    wire:model.defer="chronic_health_problem" required />

                <!-- <x-input label="Provide a doctors report (if yes)" placeholder="Enter Personnel Number" class="uppercase" wire:model.defer="chp_report" type="file" /> -->

                <x-native-select label="Has the child been diagnosed of having anu physical challenges?"
                    placeholder="Select one" :options=" [
                    ['value' => 'no', 'name' => 'No'],
                    ['value' => 'yes', 'name' => 'Yes']]" option-label="name" option-value="value" class="uppercase"
                    wire:model.defer="diagnose_physical_challenge" required />

                <!-- <x-input label="Provide a doctors report (if yes)" placeholder="Enter Unit / Section / Department" class="uppercase" wire:model.defer="dpc_report" type="file" /> -->

            </div>
        </div>

        <div class="py-5">
            <div class="my-4 text-xl font-bold text-indigo-900 border-b dark:border-0 py-2.5 uppercase">
                {{ __('4. Disciplinary Problem (s)') }}
            </div>
            <div class="">
                <x-native-select label="has the applicant been involved in any indiscipline at home/school?"
                    placeholder="Select one" :options=" [
                    ['value' => 'no', 'name' => 'No'],
                    ['value' => 'yes', 'name' => 'Yes']]" option-label="name" option-value="value" class="uppercase"
                    wire:model.defer="disciplinary_problem" required />
            </div>
        </div>


        <div class="py-5">
            <div class="my-4 text-xl font-bold text-indigo-900 border-b dark:border-0 py-2.5 uppercase">
                {{ __('5. Significant information about Pupil') }}
            </div>
            <div class="grid grid-cols-2 gap-5">
                <div class="col-span-2">
                    Athletics : List 2 sporting events of pupil's interest / capabilities
                </div>

                <x-input label="Athletics 1" placeholder="" class="uppercase" wire:model.defer="athletics1" required />

                <x-input label="Athletics 2" placeholder="" class="uppercase" wire:model.defer="athletics2" required />

                <div class="col-span-2">
                    Games : List 2 games of pupil's interest
                </div>
                <x-input label="Game 1" placeholder="" class="uppercase" wire:model.defer="games1" required />

                <x-input label="Game 2" placeholder="" class="uppercase" wire:model.defer="games2" required />

                <div class="col-span-2">
                    Hobbies : List any 2 of childs's interest
                </div>
                <x-input label="Hobby 1" placeholder="" class="uppercase" wire:model.defer="hobbies1" required />

                <x-input label="Hobby 2" placeholder="" class="uppercase" wire:model.defer="hobbies2" required />

                <div class="col-span-2">
                    Academic / co-curricular Achievements (if any)
                </div>
                <x-input label="Academic Achievement 1" placeholder="" class="uppercase"
                    wire:model.defer="academic_achievement1" />

                <x-input label="Academic Achievement 2" placeholder="" class="uppercase"
                    wire:model.defer="academic_achievement2" />

            </div>
        </div>


        <div class="py-5">
            <div class="my-4 text-xl font-bold text-indigo-900 border-b dark:border-0 py-2.5 uppercase">
                {{ __('6. Personality Development (Tick where applicable)') }}
            </div>
            <div class="mb-4">
                <table class="table-auto w-full uppercase items-center mb-0 align-top border-gray-200">
                    <thead>
                        <th width="40%" class="p-2 align-middle bg-transparent border-b">Trait</th>
                        <th width="20%" class="p-2 align-middle bg-transparent border-b">A</th>
                        <th width="20%" class="p-2 align-middle bg-transparent border-b">B</th>
                        <th width="20%" class="p-2 align-middle bg-transparent border-b">C</th>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="p-2 align-middle bg-transparent border-b whitespace-nowrap text-left">Neatness
                            </th>
                            <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="radioBtn">
                                    <input type="radio" id="radio-neatness-A" name="neatness" class="hidden" value="A"
                                        wire:model.defer="neatness">
                                    <label class="fa" for="radio-neatness-A"></label>
                                </div>
                            </td>
                            <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="radioBtn">
                                    <input type="radio" id="radio-neatness-B" name="neatness" class="hidden" value="B"
                                        wire:model.defer="neatness">
                                    <label class="fa" for="radio-neatness-B"></label>
                                </div>
                            </td>
                            <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="radioBtn">
                                    <input type="radio" id="radio-neatness-3" name="neatness" class="hidden" value="C"
                                        wire:model.defer="neatness">
                                    <label class="fa" for="radio-neatness-3"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="p-2 align-middle bg-transparent border-b whitespace-nowrap text-left">Honesty
                            </th>
                            <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="radioBtn">
                                    <input type="radio" id="radio-honesty-A" name="honesty" class="hidden" value="A"
                                        wire:model.defer="honesty">
                                    <label class="fa" for="radio-honesty-A"></label>
                                </div>
                            </td>
                            <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="radioBtn">
                                    <input type="radio" id="radio-honesty-B" name="honesty" class="hidden" value="B"
                                        wire:model.defer="honesty">
                                    <label class="fa" for="radio-honesty-B"></label>
                                </div>
                            </td>
                            <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="radioBtn">
                                    <input type="radio" id="radio-honesty-3" name="honesty" class="hidden" value="C"
                                        wire:model.defer="honesty">
                                    <label class="fa" for="radio-honesty-3"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="p-2 align-middle bg-transparent border-b whitespace-nowrap text-left">Emotional
                                Control</th>
                            <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="radioBtn">
                                    <input type="radio" id="radio-emotinal_control-A" name="emotinal_control"
                                        class="hidden" value="A" wire:model.defer="emotinal_control">
                                    <label class="fa" for="radio-emotinal_control-A"></label>
                                </div>
                            </td>
                            <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="radioBtn">
                                    <input type="radio" id="radio-emotinal_control-B" name="emotinal_control"
                                        class="hidden" value="B" wire:model.defer="emotinal_control">
                                    <label class="fa" for="radio-emotinal_control-B"></label>
                                </div>
                            </td>
                            <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="radioBtn">
                                    <input type="radio" id="radio-emotinal_control-3" name="emotinal_control"
                                        class="hidden" value="C" wire:model.defer="emotinal_control">
                                    <label class="fa" for="radio-emotinal_control-3"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="p-2 align-middle bg-transparent border-b whitespace-nowrap text-left">
                                Friendliness</th>
                            <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="radioBtn">
                                    <input type="radio" id="radio-friendliness-A" name="friendliness" class="hidden"
                                        value="A" wire:model.defer="friendliness">
                                    <label class="fa" for="radio-friendliness-A"></label>
                                </div>
                            </td>
                            <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="radioBtn">
                                    <input type="radio" id="radio-friendliness-B" name="friendliness" class="hidden"
                                        value="B" wire:model.defer="friendliness">
                                    <label class="fa" for="radio-friendliness-B"></label>
                                </div>
                            </td>
                            <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="radioBtn">
                                    <input type="radio" id="radio-friendliness-3" name="friendliness" class="hidden"
                                        value="C" wire:model.defer="friendliness">
                                    <label class="fa" for="radio-friendliness-3"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="p-2 align-middle bg-transparent border-b whitespace-nowrap text-left">Work Habits
                            </th>
                            <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="radioBtn">
                                    <input type="radio" id="radio-work_habits-A" name="work_habits" class="hidden"
                                        value="A" wire:model.defer="work_habits">
                                    <label class="fa" for="radio-work_habits-A"></label>
                                </div>
                            </td>
                            <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="radioBtn">
                                    <input type="radio" id="radio-work_habits-B" name="work_habits" class="hidden"
                                        value="B" wire:model.defer="work_habits">
                                    <label class="fa" for="radio-work_habits-B"></label>
                                </div>
                            </td>
                            <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap">
                                <div class="radioBtn">
                                    <input type="radio" id="radio-work_habits-3" name="work_habits" class="hidden"
                                        value="C" wire:model.defer="work_habits">
                                    <label class="fa" for="radio-work_habits-3"></label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <div class="pb-4">
                    <div class="text-red-500 text-sm font-semibold">
                        <p>Please use <strong>ABC</strong> scale. </p>
                        <p><q><strong>A</strong></q> being highest level. </p>
                        <p><q><strong>B</strong></q> being high. </p>
                        <p><q><strong>C</strong></q> being least / weakest level of development. </p>

                    </div>
                </div>
            </div>


        </div>


        <div class="py-5">
            <div class="my-4 text-xl font-bold text-indigo-900 border-b dark:border-0 py-2.5 uppercase">
                {{ __('7. Emergency Information (Who To Contact In Case Of Emergency)') }}
            </div>
            <div class="pb-4">
                <div class="my-4 text-lg font-semibold text-indigo-900">
                    {{ __('Emergency Contact 1') }}
                </div>
                <div class="grid grid-cols-2 gap-5">

                    <x-input label="Contact Name 1" placeholder="Contact Name 1" class="uppercase"
                        wire:model.defer="contact_name1" required />

                    <x-inputs.maskable label="Contact Phone Number 1"
                        mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']"
                        placeholder="Contact Phone Number 1" class="uppercase" wire:model.defer="contact_phone_number1"
                        required />
                </div>
            </div>
            <div class="pb-4">
                <div class="my-4 text-lg font-semibold text-indigo-900">
                    {{ __('Emergency Contact 2') }}
                </div>
                <div class="grid grid-cols-2 gap-5">

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