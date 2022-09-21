<x-app-layout>
    <x-slot name="header">
        <h6 class="mb-0 font-bold capitalize">{{ __('Details Admission Voucher') }}</h6>
    </x-slot>
    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="max-w-full px-3 lg:w-2/3 lg:flex-none">
                <div class="flex flex-wrap -mx-3 space-y-3">
                    <div class="max-w-full px-3 mb-4 lg:mb-0 lg:w-full lg:flex-none">
                        <!-- Html Print Component -->
                        <x-html-print>

                            <div class="grid grid-cols-4 items-center pb-8">
                                <div class="flex justify-center items-center">
                                    <x-application-logo class="h-20" />
                                </div>
                                <div class="col-span-2 text-center uppercase">
                                    <h6 class="font-bold">University of Cape Coast Basic Junior High School
                                    </h6>
                                    <h6 class="underline font-bold">Admission Voucher
                                    </h6>
                                </div>
                            </div>
                            <table class="table-auto w-full uppercase">
                                <tbody>
                                    <tr>
                                        <th width="20%" class="text-left font-bold">Name:</th>
                                        <td width="40%">{{$voucher->name}}</td>
                                        <th width="15%" class="text-left font-bold">Phone:</th>
                                        <td width="25%">{{$voucher->phone}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table-auto w-full uppercase">
                                <tbody>
                                    <tr>
                                        <th width="20%" class="text-left font-bold">Campus:</th>
                                        <td width="40%">
                                            {{$voucher->campus === "north" ? "North (Annex)" : "South
                                            (Main)"}}
                                        </td>
                                        <th width="15%" class="text-left font-bold">Date:</th>
                                        <td width="25%">{{$voucher->created_at->format('d-M-Y g:i:s A')}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br />
                            <div class="col-span-2 border-b"></div>
                            <br />
                            <table class="table-auto w-full uppercase">
                                <tbody>
                                    <tr>
                                        <th width="20%" class="text-left font-bold">Addmission Number:</th>
                                        <td width="40%">{{$voucher->addmission_number}}</td>
                                        <th width="15%" class="text-left font-bold">Token:</th>
                                        <td width="25%">{{$voucher->token}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br />
                            <div class="col-span-2 border-b"></div>
                            <br />
                            <table class="table-auto w-full">
                                <tbody>
                                    <tr>
                                        <td class="text-center">Visit: <span
                                                class="underline font=bold">{{route('voucher.auth')}}</span> to complete
                                            your
                                            admission
                                            process. </td>
                                    </tr>
                                </tbody>
                            </table>
                        </x-html-print>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>