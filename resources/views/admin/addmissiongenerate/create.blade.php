<x-app-layout>
    <x-slot name="header">
        <h6 class="mb-0 font-bold capitalize">{{ __('Generate Admission Voucher') }}</h6>
    </x-slot>


    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="max-w-full px-3 lg:w-2/3 lg:flex-none">
                <div
                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6 class="mb-0 font-bold capitalize">Generate Vocher</h6>
                    </div>
                    <div class="flex-auto p-6">
                        <!--  -->
                        @if(Session::has('message'))
                        <x-alert-success>{{Session::get('message')}}</x-alert-success>
                        @endif

                        <livewire:admin.addmissiongenerate.create />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>