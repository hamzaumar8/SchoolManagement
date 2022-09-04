<div x-data="{
		printDiv() {
			var printContents = this.$refs.container.innerHTML;
			var originalContents = document.body.innerHTML;
			document.body.innerHTML = printContents;
			window.print();
			document.body.innerHTML = originalContents;
		}
	}" x-cloak x-ref="container" class="print:text-black relative">

    <div
        class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 border-transparent border-solid rounded-2xl bg-clip-border">
        <div class="p-4 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
            <div class="flex flex-wrap -mx-3">
                <div class="flex items-center flex-none w-1/2 max-w-full px-3">
                    @isset($header)
                    <h6 class="mb-0 font-bold capitalize">{{ $header }}</h6>
                    @endisset
                </div>
                <div class="print:hidden flex-none w-1/2 max-w-full px-3 text-right">
                    <button
                        class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25"
                        type="button" x-on:click="printDiv()"> <i class="fas fa-print mr-2"> </i> Print</button>
                </div>
            </div>
        </div>
        <div class="flex-auto p-4">

            <!--  -->
            @if(Session::has('message'))
            <x-alert-success>{{Session::get('message')}}</x-alert-success>
            @endif

            {{ $slot }}

        </div>
    </div>
</div>