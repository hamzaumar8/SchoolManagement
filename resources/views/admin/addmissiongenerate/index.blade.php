<x-app-layout>
    <x-slot name="header">
        <h6 class="mb-0 font-bold capitalize">{{ __('Addmission Voucher') }}</h6>
    </x-slot>


    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div
                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <div class="flex flex-wrap -mx-3">
                            <div class="flex items-center flex-none w-1/2 max-w-full px-3">
                                <h6 class="text-xl font-semibold text-gray-700">Admission Vouchers</h6>
                            </div>
                            <div class=" flex-none w-1/2 max-w-full px-3 text-right">
                                <x-link href=" {{ route('addmissiongenerate.create') }}"><i
                                        class="fas fa-plus mr-2"></i>
                                    Generate Voucher</x-link>
                            </div>
                        </div>
                    </div>

                    <div class="flex-auto p-6">
                        <livewire:addmission-voucher-table />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>