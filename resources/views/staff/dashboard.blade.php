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
                                <div class="flex justify-center items-center w-12 h-12 text-center rounded-lg bg-amber-500">
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
                                <div class="flex justify-center items-center w-12 h-12 text-center rounded-lg bg-blue-500">
                                    <span class="text-xl font-bold text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                        </svg>
                                    </span>
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
                                <div class="flex justify-center items-center w-12 h-12 text-center rounded-lg bg-lime-500">
                                    <span class="text-xl font-bold text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                        </svg>
                                    </span>
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
                                <div class="flex justify-center items-center w-12 h-12 text-center rounded-lg bg-pink-500">
                                    <span class="text-xl font-bold text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif



    </div>
    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full px-3 mb-6 lg:mb-0 lg:w-1/2 lg:flex-none">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap -mx-3">
                        <ul class="relative z-10 flex flex-col flex-auto h-full p-4">
                            <li class="relative border-b border-gray-200 w-full px-8 py-6 text-left">
                                <div class="flex items-center justify-between">
                                    <span class="uppercase"> My Subjects </span>
                                </div>

                            </li>
                            @if($staff->class_subject)
                            @foreach ($staff->class_subject->groupBy('subject_id') as $subjects)
                            <li class="relative border-b border-gray-200" x-data="{subject:null}">
                                <button type="button" class="w-full px-8 py-6 text-left text-blue-800" @click="subject !== {{$subjects[0]->subject->id}} ? subject = {{$subjects[0]->subject->id}} : subject = null">
                                    <div class="flex items-center justify-between">
                                        <span class="capitalize"> {{$subjects[0]->subject->name}} </span>
                                        <div>
                                            <span class="transition" x-ref="containersub{{$subjects[0]->subject->id}}" x-bind:style="subject != {{$subjects[0]->subject->id}} ? 'display: none':''">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                                </svg>
                                            </span>
                                            <span class="transition" x-ref="containersub{{$subjects[0]->subject->id}}" x-bind:style="subject == {{$subjects[0]->subject->id}} ? 'display: none':''">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                </svg>
                                        </div>

                                        </span>
                                    </div>
                                </button>
                                <br>
                                @foreach ($subjects as $subject)
                                <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="containersub{{$subjects[0]->subject->id}}" x-bind:style="subject == {{$subjects[0]->subject->id}} ? 'max-height: ' + $refs.containersub{{$subjects[0]->subject->id}}.scrollHeight + 'px' : ''">
                                    <div class="p-6  border-t">
                                        <a href="{{ route('staff.assessment.class_subject', [$subject->class_id,$subject->subject_id]) }}">{{$subject->class->name}}</a>
                                    </div>
                                </div>

                                @endforeach
                            </li>
                            @endforeach
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full max-w-full px-3 lg:w-5/12 lg:flex-none">
            <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4">
                <div class="relative h-full overflow-hidden bg-cover rounded-xl" style="background-image: url('../assets/img/ivancik.jpg')">
                    <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-80"></span>
                    <div class="relative z-10 flex flex-col flex-auto h-full p-4">
                        <h5 class="pt-2 mb-6 font-bold text-white">Work with the rockets</h5>
                        <p class="text-white">Wealth creation is an evolutionarily recent positive-sum game. It is all
                            about who take the opportunity first.</p>
                        <a class="mt-auto mb-0 font-semibold leading-normal text-white group text-sm" href="javascript:;">
                            Read More
                            <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>