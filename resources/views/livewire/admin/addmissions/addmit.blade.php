<div class="p-3 pt-5 ralative">
    <div class="font-semibold font-gray-700 text-lg border-b">Addmit Student</div>
    <!-- <div class="absolute top-0 right-0 bg-indigo-900 flex w-10 h-10 rounded-full rounded-tr-0 text-white "
        wire:click="cancel">
        <span>X</span>
    </div> -->
    <div class="p-2">
        <form wire:submt.prevent="addmit" method="POST" class="w-full">

            <div>
                <div class="mb-4">
                    <label>Addmission Number</label>
                    <div class="font-bold">{{$addmission->addmission_number}}</div>
                </div>
                <div class="mb-4">
                    <label>Date Received / Submitted</label>
                    <div class="font-bold">{{$addmission->created_at}}</div>
                </div>
                <div class="mb-4">
                    <x-input label="DATE OF ENTRANCE EXAMS" placeholder="Date of Entrance Exams" type="date"
                        class="uppercase" required wire:model.defer="date_entrance_exam" />
                </div>

                <div class="mb-4">
                    <x-select label="Class Approved for addmission" placeholder="Select a class"
                        :async-data="route('api.classes.index')" option-label="name" class="uppercase" option-value="id"
                        wire:model.defer="class_approved" required />
                </div>

                <div class="mb-4">
                    <x-native-select label="Term Addmitted" placeholder="Select a Term" :options=" [
                    ['value' => '1', 'name' => '1'],
                    ['value' => '2', 'name' => '2'],
                    ['value' => '3', 'name' => '3'],
                    ]" option-label="name" option-value="value" class="uppercase" wire:model.defer="term_addmitted"
                        required />
                </div>
            </div>

            <div class="space-x-2 flex justify-end pt-4">

                <x-button blue type="submit" spinner="addmit" :label="__('Addmit')" />

                <x-button rose wire:click="cancel" spinner="cancel" :label="__('Cancel')" />
            </div>
        </form>
    </div>

</div>