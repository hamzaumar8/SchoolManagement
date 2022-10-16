<x-app-layout header="{{ __('Dashboard') }}">
    <style>
    .max-h-0 {
        max-height: 0;
    }
    </style>
    <!-- cards -->
    <div class="w-full px-6 pb-6 mx-auto">
        <!-- row 1 -->
        <div class="flex flex-wrap -mx-3">
            <!-- card1 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
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
            {{$staff->class_subject}}

            <div class="flex justify-center">

                <div
                    class="max-w-xl mx-auto border border-gray-200 relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <ul class="shadow-box">
                        <li class="relative border-b border-gray-200 w-full px-8 py-6 text-left">
                            <div class="flex items-center justify-between">
                                <span class="uppercase"> Subjects classess </span>
                            </div>

                        </li>
                        @foreach ($staff->class_subject as $subject)

                        <li class="relative border-b border-gray-200" x-data="{subject:null}">

                            <button type="button" class="w-full px-8 py-6 text-left"
                                @click="subject !== {{$subject->id}} ? subject = {{$subject->id}} : subject = null">
                                <div class="flex items-center justify-between">
                                    <span class="capitalize"> {{$subject->class->name}} </span>
                                    <span class=" ico-plus"></span>
                                </div>
                            </button>

                            <div class="relative overflow-hidden transition-all max-h-0 duration-700" style=""
                                x-ref="containersub{{$subject->id}}"
                                x-bind:style="subject == {{$subject->id}} ? 'max-height: ' + $refs.containersub{{$subject->id}}.scrollHeight + 'px' : ''">
                                <div class="p-6">
                                    <p>To do this, load the v3 site key as documented, and then explicitly render v2
                                        using grecaptcha.render.</p>
                                    <p>After that, apply the same to everywhere else that uses
                                        "www.google.com/recaptcha/" on your site.</p>
                                    {{$subject}}
                                </div>
                            </div>

                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>