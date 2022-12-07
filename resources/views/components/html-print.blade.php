<div x-data="{
		printDiv() {
			var printContents = this.$refs.container.innerHTML;
			var originalContents = document.body.innerHTML;
			document.body.innerHTML = printContents;
			window.print();
			document.body.innerHTML = originalContents;
		}
	}" x-cloak x-ref="container" class="print:text-black relative">
    <div class="flex-auto p-6">

        <div class="p-4  mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent print:hidden">
            <div class="flex flex-wrap -mx-3">
                <div class="grid grid-cols-2 gap-5 w-full px-3">
                    <div class="flex items-center flex-none">
                        @isset($header)
                        <h6 class="mb-0 font-bold capitalize">{{ $header }}</h6>
                        @endisset
                    </div>

                    <div class=" flex-none  text-right">
                        <button
                            class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25"
                            type="button" x-on:click="printDiv()"> <i class="fas fa-print mr-2"> </i> Print</button>
                    </div>
                </div>
            </div>
        </div>

        <!--  -->
        @if(Session::has('message'))
        <x-alert-success>{{Session::get('message')}}</x-alert-success>
        @endif

        {{ $slot }}

    </div>
</div>