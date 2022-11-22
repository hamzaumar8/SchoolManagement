<div>
    <x-button blue wire:click="add()" type="button">add row </x-button>
    <div class="py-5">
        <table class="w-full text-left text-slate-500">
            <thead class="text-slate-700 uppercase bg-slate-50">
                <tr>
                    <th class="px-6 py-3">No.</th>
                    <th class="px-6 py-3">Subject</th>
                    <th class="px-6 py-3">Subject Teacher</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classsubjects as $index => $classsubject)

                <tr class="border-b">
                    <td class="px-6 py-4">{{ $index+1 }}</td>
                    <td class="px-6 py-4">
                        <select wire:model="classsubjects.{{ $index }}.subject_id"
                            class="w-full bg-gray-50 border-slate-300 @error('classsubjects.' .$index . '.subject_id') border-red-500 @enderror text-slate-900 text-sm rounded-lg focuus:ring-blue-500 focus:border-blue-500 block p-2.5">
                            <option></option>
                            @foreach ($subjects as $subject)
                            <option {{ $classsubject->subject_id == $subject->id ? 'selected':'' }}
                                value="{{ $subject->id }}">
                                {{$subject->name}}
                            </option>
                            @endforeach
                        </select>
                    </td>
                    <td class=" px-6 py-4">
                        <select wire:model="classsubjects.{{ $index }}.staff_id"
                            class="w-full bg-gray-50 border-slate-300 @error('classsubjects.' .$index . '.staff_id') border-red-500 @enderror text-slate-900 text-sm rounded-lg focuus:ring-blue-500 focus:border-blue-500 block p-2.5">
                            <option></option>
                            @foreach ($staffs as $staff)
                            <option {{ $classsubject->staff_id == $staff->id ? 'selected':'' }}
                                value="{{ $staff->id }}">
                                {{$staff->full_name}}
                            </option>
                            @endforeach
                        </select>
                    </td>
                    <td class="px-6 py-4">
                        <x-button rose spinner="delete({{$index}})" wire:click="delete({{$index}})">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </x-button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="space-x-2 flex justify-end mt-3">
        <x-button blue spinner="addsubject" wire:click="addsubject" :label="__('Add Subjjects')" />
    </div>
</div>