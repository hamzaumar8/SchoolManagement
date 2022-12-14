<x-voucher-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!--  -->
                    @if(Session::has('message'))
                    <x-alert-success>{{Session::get('message')}}</x-alert-success>
                    @endif
                    <!--  -->
                    <livewire:voucher.form />
                </div>
            </div>
        </div>
    </div>
</x-voucher-layout>