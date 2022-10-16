   <!-- sidenav  -->
   <aside
       class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-[#2c3690] p-0 antialiased transition-transform duration-200 xl:left-0 xl:translate-x-0 ps xl:bg-[#2c3690] shadow-soft-xl z-[9]">
       <div class="h-19.5">
           <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden"
               sidenav-close></i>
           <a class="block px-6 py-5 m-0 text-sm whitespace-nowrap text-slate-700" href="javascript:;">
               <x-application-logo class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8"
                   alt="main_logo" />
               <span class="ml-1 font-bold transition-all duration-200 ease-nav-brand text-white text-lg uppercase">UCC
                   Basic School</span>
           </a>
       </div>

       <hr class="h-px mt-0 my-[1rem] bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

       <div class="items-center block w-auto max-h-screen overflow-auto grow basis-full">
           <ul class="flex flex-col pl-0 mb-0">
               @if(Auth::user()->role === 'STF')
               <li class="mt-0.5 w-full">
                   <x-nav-link :href="route('staff.dashboard')" :active="request()->routeIs('staff.dashboard')">
                       <x-slot name="icon">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                               class="w-full h-full">
                               <path fill-rule="evenodd"
                                   d="M8.25 6.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM15.75 9.75a3 3 0 116 0 3 3 0 01-6 0zM2.25 9.75a3 3 0 116 0 3 3 0 01-6 0zM6.31 15.117A6.745 6.745 0 0112 12a6.745 6.745 0 016.709 7.498.75.75 0 01-.372.568A12.696 12.696 0 0112 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 01-.372-.568 6.787 6.787 0 011.019-4.38z"
                                   clip-rule="evenodd" />
                               <path
                                   d="M5.082 14.254a8.287 8.287 0 00-1.308 5.135 9.687 9.687 0 01-1.764-.44l-.115-.04a.563.563 0 01-.373-.487l-.01-.121a3.75 3.75 0 013.57-4.047zM20.226 19.389a8.287 8.287 0 00-1.308-5.135 3.75 3.75 0 013.57 4.047l-.01.121a.563.563 0 01-.373.486l-.115.04c-.567.2-1.156.349-1.764.441z" />
                           </svg>
                       </x-slot>
                       {{ __('Dashboard') }}

                   </x-nav-link>
               </li>
               <li class="mt-0.5 w-full">
                   <x-nav-link :href="route('staff.attendance.index')"
                       :active="request()->routeIs('staff.attendance.index')">
                       <x-slot name="icon">
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                               stroke="currentColor" class="w-6 h-6">
                               <path stroke-linecap="round" stroke-linejoin="round"
                                   d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                           </svg>
                       </x-slot>
                       {{ __('Class Attendance') }}

                   </x-nav-link>
               </li>
               @endif

               @if(Auth::user()->role === 'ADM')
               <li class="mt-0.5 w-full">
                   <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                       <x-slot name="icon">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                               class="w-full h-full">
                               <path fill-rule="evenodd"
                                   d="M8.25 6.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM15.75 9.75a3 3 0 116 0 3 3 0 01-6 0zM2.25 9.75a3 3 0 116 0 3 3 0 01-6 0zM6.31 15.117A6.745 6.745 0 0112 12a6.745 6.745 0 016.709 7.498.75.75 0 01-.372.568A12.696 12.696 0 0112 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 01-.372-.568 6.787 6.787 0 011.019-4.38z"
                                   clip-rule="evenodd" />
                               <path
                                   d="M5.082 14.254a8.287 8.287 0 00-1.308 5.135 9.687 9.687 0 01-1.764-.44l-.115-.04a.563.563 0 01-.373-.487l-.01-.121a3.75 3.75 0 013.57-4.047zM20.226 19.389a8.287 8.287 0 00-1.308-5.135 3.75 3.75 0 013.57 4.047l-.01.121a.563.563 0 01-.373.486l-.115.04c-.567.2-1.156.349-1.764.441z" />
                           </svg>
                       </x-slot>
                       {{ __('Dashboard') }}

                   </x-nav-link>
               </li>
               <li class="mt-0.5 w-full">
                   <x-nav-link :href="route('students.index')" :active="request()->routeIs('students.index')">
                       <x-slot name="icon" :active="request()->routeIs('students.index')">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                               class="w-full h-full">
                               <path fill-rule="evenodd"
                                   d="M8.25 6.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM15.75 9.75a3 3 0 116 0 3 3 0 01-6 0zM2.25 9.75a3 3 0 116 0 3 3 0 01-6 0zM6.31 15.117A6.745 6.745 0 0112 12a6.745 6.745 0 016.709 7.498.75.75 0 01-.372.568A12.696 12.696 0 0112 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 01-.372-.568 6.787 6.787 0 011.019-4.38z"
                                   clip-rule="evenodd" />
                               <path
                                   d="M5.082 14.254a8.287 8.287 0 00-1.308 5.135 9.687 9.687 0 01-1.764-.44l-.115-.04a.563.563 0 01-.373-.487l-.01-.121a3.75 3.75 0 013.57-4.047zM20.226 19.389a8.287 8.287 0 00-1.308-5.135 3.75 3.75 0 013.57 4.047l-.01.121a.563.563 0 01-.373.486l-.115.04c-.567.2-1.156.349-1.764.441z" />
                           </svg>
                       </x-slot>
                       {{ __('Student') }}

                   </x-nav-link>
               </li>
               <li class="mt-0.5 w-full">
                   <x-nav-link :href="route('addmissions.index')" :active="request()->routeIs('addmissions.index')">
                       <x-slot name="icon" :active="request()->routeIs('addmissions.index')">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                               class="w-full h-full">
                               <path fill-rule="evenodd"
                                   d="M8.25 6.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM15.75 9.75a3 3 0 116 0 3 3 0 01-6 0zM2.25 9.75a3 3 0 116 0 3 3 0 01-6 0zM6.31 15.117A6.745 6.745 0 0112 12a6.745 6.745 0 016.709 7.498.75.75 0 01-.372.568A12.696 12.696 0 0112 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 01-.372-.568 6.787 6.787 0 011.019-4.38z"
                                   clip-rule="evenodd" />
                               <path
                                   d="M5.082 14.254a8.287 8.287 0 00-1.308 5.135 9.687 9.687 0 01-1.764-.44l-.115-.04a.563.563 0 01-.373-.487l-.01-.121a3.75 3.75 0 013.57-4.047zM20.226 19.389a8.287 8.287 0 00-1.308-5.135 3.75 3.75 0 013.57 4.047l-.01.121a.563.563 0 01-.373.486l-.115.04c-.567.2-1.156.349-1.764.441z" />
                           </svg>
                       </x-slot>
                       {{ __('Addmission') }}

                   </x-nav-link>
               </li>
               <li class="mt-0.5 w-full">
                   <x-nav-link :href="route('classes.index')" :active="request()->routeIs('classes.index')">
                       <x-slot name="icon" :active="request()->routeIs('addmissions.index')">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                               class="w-full h-full">
                               <path fill-rule="evenodd"
                                   d="M8.25 6.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM15.75 9.75a3 3 0 116 0 3 3 0 01-6   0zM2.25 9.75a3 3 0 116 0 3 3 0 01-6 0zM6.31 15.117A6.745 6.745 0 0112 12a6.745 6.745 0 016.709 7.498.75.75 0 01-.372.568A12.696 12.696 0 0112 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 01-.372-.568 6.787 6.787 0 011.019-4.38z"
                                   clip-rule="evenodd" />
                               <path
                                   d="M5.082 14.254a8.287 8.287 0 00-1.308 5.135 9.687 9.687 0 01-1.764-.44l-.115-.04a.563.563 0 01-.373-.487l-.01-.121a3.75 3.75 0 013.57-4.047zM20.226 19.389a8.287 8.287 0 00-1.308-5.135 3.75 3.75 0 013.57 4.047l-.01.121a.563.563 0 01-.373.486l-.115.04c-.567.2-1.156.349-1.764.441z" />
                           </svg>
                       </x-slot>
                       {{ __('Classes') }}

                   </x-nav-link>
               </li>
               <li class="mt-0.5 w-full">
                   <x-nav-link :href="route('subjects.index')" :active="request()->routeIs('subjects.index')">
                       <x-slot name="icon" :active="request()->routeIs('addmissions.index')">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                               class="w-full h-full">
                               <path fill-rule="evenodd"
                                   d="M8.25 6.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM15.75 9.75a3 3 0 116 0 3 3 0 01-6 0zM2.25 9.75a3 3 0 116 0 3 3 0 01-6 0zM6.31 15.117A6.745 6.745 0 0112 12a6.745 6.745 0 016.709 7.498.75.75 0 01-.372.568A12.696 12.696 0 0112 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 01-.372-.568 6.787 6.787 0 011.019-4.38z"
                                   clip-rule="evenodd" />
                               <path
                                   d="M5.082 14.254a8.287 8.287 0 00-1.308 5.135 9.687 9.687 0 01-1.764-.44l-.115-.04a.563.563 0 01-.373-.487l-.01-.121a3.75 3.75 0 013.57-4.047zM20.226 19.389a8.287 8.287 0 00-1.308-5.135 3.75 3.75 0 013.57 4.047l-.01.121a.563.563 0 01-.373.486l-.115.04c-.567.2-1.156.349-1.764.441z" />
                           </svg>
                       </x-slot>
                       {{ __('Subject') }}

                   </x-nav-link>
               </li>
               <li class="mt-0.5 w-full">
                   <x-nav-link :href="route('staffs.index')" :active="request()->routeIs('staffs.index')">
                       <x-slot name="icon" :active="request()->routeIs('staffs.index')">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                               class="w-full h-full">
                               <path fill-rule="evenodd"
                                   d="M8.25 6.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM15.75 9.75a3 3 0 116 0 3 3 0 01-6 0zM2.25 9.75a3 3 0 116 0 3 3 0 01-6 0zM6.31 15.117A6.745 6.745 0 0112 12a6.745 6.745 0 016.709 7.498.75.75 0 01-.372.568A12.696 12.696 0 0112 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 01-.372-.568 6.787 6.787 0 011.019-4.38z"
                                   clip-rule="evenodd" />
                               <path
                                   d="M5.082 14.254a8.287 8.287 0 00-1.308 5.135 9.687 9.687 0 01-1.764-.44l-.115-.04a.563.563 0 01-.373-.487l-.01-.121a3.75 3.75 0 013.57-4.047zM20.226 19.389a8.287 8.287 0 00-1.308-5.135 3.75 3.75 0 013.57 4.047l-.01.121a.563.563 0 01-.373.486l-.115.04c-.567.2-1.156.349-1.764.441z" />
                           </svg>
                       </x-slot>
                       {{ __('Staff') }}

                   </x-nav-link>
               </li>
               <li class="mt-0.5 w-full">
                   <x-nav-link :href="route('vouchers.index')" :active="request()->routeIs('vouchers.index')">
                       <x-slot name="icon" :active="request()->routeIs('vouchers.index')">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                               class="w-full h-full">
                               <path fill-rule="evenodd"
                                   d="M8.25 6.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM15.75 9.75a3 3 0 116 0 3 3 0 01-6 0zM2.25 9.75a3 3 0 116 0 3 3 0 01-6 0zM6.31 15.117A6.745 6.745 0 0112 12a6.745 6.745 0 016.709 7.498.75.75 0 01-.372.568A12.696 12.696 0 0112 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 01-.372-.568 6.787 6.787 0 011.019-4.38z"
                                   clip-rule="evenodd" />
                               <path
                                   d="M5.082 14.254a8.287 8.287 0 00-1.308 5.135 9.687 9.687 0 01-1.764-.44l-.115-.04a.563.563 0 01-.373-.487l-.01-.121a3.75 3.75 0 013.57-4.047zM20.226 19.389a8.287 8.287 0 00-1.308-5.135 3.75 3.75 0 013.57 4.047l-.01.121a.563.563 0 01-.373.486l-.115.04c-.567.2-1.156.349-1.764.441z" />
                           </svg>
                       </x-slot>
                       {{ __('Addmission Voucher') }}

                   </x-nav-link>
               </li>

               @endif
           </ul>
       </div>
   </aside>