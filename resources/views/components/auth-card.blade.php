<div
    class="relative flex flex-col min-w-0 mt-32 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">

    <div class="w-full sm:max-w-md ">
        <a href="/" class="flex items-end">
            <x-application-logo class="h-[5rem] mr-3" />
            <div id="site-slogan" class="text-[#2c3690] text-[1.5rem] font-bold uppercase">UCC Basic School Management
                System</div>
        </a>
    </div>

    <div class="flex-auto p-6">
        {{ $slot }}
    </div>
</div>