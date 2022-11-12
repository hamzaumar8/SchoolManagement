<x-app-layout header="{{ __('Dashboard') }}">
    <style>
    .max-h-0 {
        max-height: 0;
    }
    </style>
    <!-- row 1 -->
    <div class="flex relative flex-wrap ">
        <!-- card1 -->
        @if ($CurrTerm)
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-3 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans font-semibold leading-normal text-sm">Current Term</p>
                                <h5 class="mb-0 font-bold text-xl">
                                    @if($CurrTerm['term'] == 1)
                                    First
                                    @elseif($CurrTerm['term'] == 2)
                                    Second
                                    @else
                                    Third
                                    @endif
                                    Term
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block">
                                <div
                                    class="flex justify-center items-center w-12 h-12 text-center rounded-lg bg-amber-500">
                                    <span class="text-xl font-bold text-white">
                                        {{ $CurrTerm['term'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-3 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans font-semibold leading-normal text-sm">Academic Year</p>
                                <h5 class="mb-0 font-bold text-xl">
                                    {{ $CurrTerm['academic_year'] }}
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block">
                                <div
                                    class="flex justify-center items-center w-12 h-12 text-center rounded-lg bg-amber-500">
                                    <span class="text-xl font-bold text-white">
                                        {{ $CurrTerm['term'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-3 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans font-semibold leading-normal text-sm">Term Start Date</p>
                                <h5 class="mb-0 font-bold text-xl">
                                    {{ $CurrTerm['start_date']}}
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block">
                                <div
                                    class="flex justify-center items-center w-12 h-12 text-center rounded-lg bg-amber-500">
                                    <span class="text-xl font-bold text-white">
                                        {{ $CurrTerm['term'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-3 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans font-semibold leading-normal text-sm">Term End Date
                                </p>
                                <h5 class="mb-0 font-bold text-xl">
                                    {{ $CurrTerm['end_date'] }}
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block">
                                <div
                                    class="flex justify-center items-center w-12 h-12 text-center rounded-lg bg-amber-500">
                                    <span class="text-xl font-bold text-white">
                                        {{ $CurrTerm['term'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- card1 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-3 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans font-semibold leading-normal text-sm">Class Teacher</p>
                                <h5 class="mb-0 font-bold text-xl">
                                    666
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-lg bg-amber-500">
                                <i class="fa fa-users text-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- row 1 -->
    <!-- <div class="flex flex-wrap -mx-3"> -->
    <div
        class="max-w-xl border border-gray-200 relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
        <ul class="shadow-box">
            <li class="relative border-b border-gray-200 w-full px-8 py-6 text-left">
                <div class="flex items-center justify-between">
                    <span class="uppercase"> Subjects classess </span>
                </div>

            </li>
            @if($staff->class_subject)
            @foreach ($staff->class_subject->groupBy('subject_id') as $subjects)
            <li class="relative border-b border-gray-200" x-data="{subject:null}">
                <button type="button" class="w-full px-8 py-6 text-left text-blue-800"
                    @click="subject !== {{$subjects[0]->subject->id}} ? subject = {{$subjects[0]->subject->id}} : subject = null">
                    <div class="flex items-center justify-between">
                        <span class="capitalize"> {{$subjects[0]->subject->name}} </span>
                        <div>
                            <span class="transition" x-ref="containersub{{$subjects[0]->subject->id}}"
                                x-bind:style="subject != {{$subjects[0]->subject->id}} ? 'display: none':''">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                </svg>
                            </span>
                            <span class="transition" x-ref="containersub{{$subjects[0]->subject->id}}"
                                x-bind:style="subject == {{$subjects[0]->subject->id}} ? 'display: none':''">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                        </div>

                        </span>
                    </div>
                </button>
                <br>
                @foreach ($subjects as $subject)
                <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                    x-ref="containersub{{$subjects[0]->subject->id}}"
                    x-bind:style="subject == {{$subjects[0]->subject->id}} ? 'max-height: ' + $refs.containersub{{$subjects[0]->subject->id}}.scrollHeight + 'px' : ''">
                    <div class="p-6  border-t">
                        <a
                            href="{{ route('staff.grade.class_subject', [$subjects[0]->subject->id,$subject->id]) }}">{{$subject->class->name}}</a>
                    </div>
                </div>

                @endforeach
            </li>
            @endforeach
            @endif

        </ul>
    </div>


</x-app-layout>