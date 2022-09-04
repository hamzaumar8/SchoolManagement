<x-app-layout>
    <x-slot name="header">
        <h6 class="mb-0 font-bold capitalize">{{ __('details Admission PIN') }}</h6>
    </x-slot>
    {{$addmissionGenerate}}
    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="max-w-full px-3 lg:w-2/3 lg:flex-none">
                <div class="flex flex-wrap -mx-3 space-y-3">
                    <div class="max-w-full px-3 mb-4 lg:mb-0 lg:w-full lg:flex-none">
                        <!-- Html Print Component -->
                        <x-html-print>
                            <x-slot name="header">{{ __('Generate Admission PIN') }}</x-slot>
                            <div class="flex flex-wrap -mx-3">
                                <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
                                    <div
                                        class="relative flex flex-row items-center min-w-0 p-6 break-words bg-transparent border border-solid shadow-none rounded-xl border-slate-100 bg-clip-border">
                                        <h6 class="mb-0 mr-4 font-bold">Addmission Number</h6>
                                        <h6 class="mb-0">
                                            KHTBDJVBFVHD
                                        </h6>
                                    </div>
                                </div>
                                <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
                                    <div
                                        class="relative flex flex-row items-center min-w-0 p-6 break-words bg-transparent border border-solid shadow-none rounded-xl border-slate-100 bg-clip-border">
                                        <h6 class="mb-0 mr-4 font-bold">PIN</h6>
                                        <h6 class="mb-0">
                                            KHTBDJVBFVHD
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </x-html-print>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>