<div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
        <div
            class="relative flex flex-col min-w-0 p-6 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">

            <div x-data="{
                printDiv() {
                    var printContents = this.$refs.container.innerHTML;
                    var originalContents = document.body.innerHTML;
                    document.body.innerHTML = printContents;
                    window.print();
                    document.body.innerHTML = originalContents;
                }
            }" x-cloak x-ref="container" class="bg-white min-h-full">

                <div class="mb-5 print:hidden">
                    <div class="flex flex-wrap -mx-3">
                        @isset($back)
                            <div class="flex px-3 w-full">
                                <x-back-link href=" {{ $back }}" class="mb-4">back</x-back-link>
                            </div>
                        @endisset
                        <div class="grid grid-cols-2 gap-5 w-full px-3">
                            <div class="flex items-center flex-none">
                                @isset($header)
                                    <h6 class="mb-0 font-bold uppercase text-lg">{{ $header }}</h6>
                                @endisset
                            </div>

                            <div class=" flex-none  text-right">
                                <button
                                    class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25"
                                    type="button" x-on:click="printDiv()"> <i class="fas fa-print mr-2"> </i>
                                    Print</button>
                            </div>
                        </div>
                    </div>
                </div>
                <article class="">
                    {{ $slot }}
                </article>
            </div>
        </div>
    </div>
</div>
