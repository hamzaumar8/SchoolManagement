@props(['active'])

@php
$classes = ($active ?? false)
? 'bg-[#2c3690] shadow-soft-2xl mr-2 flex h-10 w-10 items-center justify-center rounded-lg bg-center stroke-0
text-center xl:p-2.5 text-white'
: 'shadow-soft-2xl mr-2 flex h-10 w-10 items-center justify-center rounded-lg bg-center fill-current stroke-0
text-center
xl:p-2.5 bg-gray-200';
@endphp

<a
    {{ $attributes->merge(['class' => 'py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors shadow-none']) }}>
    <div {{ $attributes->merge(['class' => $classes]) }}>
        {{ $icon }}
    </div>
    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">{{ $slot }}</span>
</a>