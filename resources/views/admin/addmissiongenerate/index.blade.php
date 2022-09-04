<x-app-layout>
    <x-slot name="header">
        <h6 class="mb-0 font-bold capitalize">{{ __('addmissions.') }}</h6>
    </x-slot>


    <div class="w-full px-6 py-6 mx-auto">

        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6 class="my-4 text-xl font-semibold text-gray-700">Admission List</h6>
                        <div>
                            <x-link href=" {{ route('addmissiongenerate.create') }}">Add new student</x-link>

                            <!-- Outside of any Livewire component -->
                            <!-- <button onclick="Livewire.emit('openModal', 'admin.addmissions.generate')">Edit User</button> -->


                            <x-html-print>
                                <h1>Printable Content Goes Here...</h1>
                            </x-html-print>
                        </div>
                    </div>

                    <div class="flex-auto p-6">
                        <livewire:student-table />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>