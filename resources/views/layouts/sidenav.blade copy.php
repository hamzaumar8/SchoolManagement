<!-- Navigation Links -->
<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
    </x-nav-link>
    @if(Auth::user()->role !== 'STF' && Auth::user()->role !== 'FIN')
    <x-nav-link :href="route('supervisors.index')" :active="request()->routeIs('supervisors.index')">
        {{ __('Supervisor') }}
    </x-nav-link>
    <x-nav-link :href="route('thesis.index')" :active="request()->routeIs('thesis.index')">
        {{ __('Thesis / Dissertation') }}
    </x-nav-link>
    <x-nav-link :href="route('students.index')" :active="request()->routeIs('students.index')">
        {{ __('Student') }}
    </x-nav-link>
    @endif
    @if(Auth::user()->role === 'FIN')
    <x-nav-link :href="route('finance.thesis.index')" :active="request()->routeIs('finance.thesis.index')">
        {{ __('Thesis / Dissertation') }}
    </x-nav-link>
    @endif
    @if(Auth::user()->role === 'STF')
    <x-nav-link :href="route('staff.thesis.index')" :active="request()->routeIs('staff.thesis.index')">
        {{ __('Thesis / Dissertation') }}
    </x-nav-link>
    @endif
    @if(Auth::user()->role === 'ADM')
    <x-nav-link :href="route('users.index')" :active="request()->routeIs('users.index')">
        {{ __('Users') }}
    </x-nav-link>
    @endif
</div>