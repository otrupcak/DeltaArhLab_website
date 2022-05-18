<header class="sticky top-0">
    {{-- navigacija za komp --}}
    <div class="hidden lg:flex flex-row h-20 shadow-lg bg-gray-200">
        <div class="basis-1/6 justify-self-start self-center pl-5 pr-10">
            <a href="/">
            <x-application-logo class="fill-gray-100 hover:fill-[#f44336] h-16 transition-all duration-300 ease-in-out" secret={{$secret}}/>
            </a>
        </div>

        <nav class="basis-2/3 grid grid-flow-col items-center justify-items-center font-medium text-gray-700">
            @if (Request::segment(1) == "about-us")
            <a href="#" class="w-6/12 min-w-fit h-1/2 rounded-2xl text-red-500 bg-gradient-to-br from-[#cacaca] via-gray-200 to-gray-100 text-center py-1.5 px-2 cursor-default">O nama</a>
            @else
            <a href="/about-us" class="w-5/12 hover:w-6/12 min-w-fit h-1/2 rounded-2xl shadow-neu1 hover:shadow-neu2 hover:text-red-500 text-center py-1.5 px-2 lg:transition-all lg:duration-300">O nama</a>
            @endif
            @if (Request::segment(1) == "projects")
            <a href="#" class="w-6/12 min-w-fit h-1/2 rounded-2xl text-red-500 bg-gradient-to-br from-[#cacaca] via-gray-200 to-gray-100 text-center py-1.5 px-2 cursor-default">Projekti</a>
            @else
            <a href="/projects" class="w-5/12 hover:w-6/12 min-w-fit h-1/2 rounded-2xl shadow-neu1 hover:shadow-neu2 hover:text-red-500 text-center py-1.5 px-2 lg:transition-all lg:duration-300">Projekti</a>
            @endif
            @if (Request::segment(1) == "contact-us")
            <a href="#" class="w-6/12 min-w-fit h-1/2 rounded-2xl text-red-500 bg-gradient-to-br from-[#cacaca] via-gray-200 to-gray-100 text-center py-1.5 px-2 cursor-default">Kontakt</a>
            @else
            <a href="/contact-us" class="w-5/12 hover:w-6/12 min-w-fit h-1/2 rounded-2xl shadow-neu1 hover:shadow-neu2 hover:text-red-500 text-center py-1.5 px-2 lg:transition-all lg:duration-300">Kontakt</a>
            @endif
        </nav>
        {{-- slajder za biranje između engleskog i srpskog --}}
        {{-- <div class="basis-1/6 grid gap-2 grid-flow-col justify-end content-center pr-5">
            <span>srb</span>
            <input type="checkbox" id="lng" name="lng">
            <span>eng</span>
        </div> --}}
    </div>

    {{-- navigacija za mobilne i tablete --}}
    <div x-data="{ open: false }" class=" flex-row lg:hidden min-h-max shadow-lg bg-gray-200" :class="{'shadow-lg':!open}">
        <div class="flex h-20 mb-3" :class="{'bg-red-500':open, 'shadow-neu1':open}">
            <div class="self-center basis-3/4 ml-6">
                <a href="/">
                    <x-application-logo class="fill-gray-100 h-16 place-self-center">
                    </x-application-logo>
                </a>
            </div>

            <button class="relative basis-1/4 text-gray-700 focus:outline-none" @click="open = !open" :class="{'text-gray-100':open}">
                <div class="block w-5 absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-300 ease-in-out" :class="{'rotate-45': open,' -translate-y-1.5': !open }"></span>
                    <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-300 ease-in-out" :class="{'opacity-0': open } "></span>
                    <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-300 ease-in-out" :class="{'-rotate-45': open, ' translate-y-1.5': !open}"></span>
                </div>
            </button>
        </div>

        <nav class="hidden font-medium text-gray-700 text-xl" :class="{'hidden':!open}">
            <div class="grid grid-flow-row text-center">

                @if (Request::segment(1) == "about-us")
                <a href="/about-us" class="w-full justify-self-center align-middle uppercase py-5 text-red-500">O nama</a>
                @else
                <a href="/about-us" class="w-full justify-self-center uppercase py-5 active:text-red-500">O nama</a>
                @endif
                @if (Request::segment(1) == "projects")
                <a href="/projects" class="w-full justify-self-center uppercase py-5 text-red-500">Projekti</a>
                @else
                <a href="/projects" class="w-full justify-self-center uppercase py-5 active:text-red-500">Projekti</a>
                @endif
                @if (Request::segment(1) == "contact-us")
                <a href="/contact-us" class="w-full justify-self-center uppercase py-5 text-red-500">Kontakt</a>
                @else
                <a href="/contact-us" class="w-full justify-self-center uppercase py-5 active:text-red-500">Kontakt</a>
                @endif

                <div class="bg-gray-200 mt-3 shadow-neu2">
                    <p class="text-sm text-center text-red-500 pt-2 uppercase">zapratite nas na</p>
                    <div class="flex justify-center h-auto gap-3 py-3">
                        @foreach (App\Models\Social::get() as $social )
                        <a href="{{$social->href}}" title="{{$social->alt}}" target="_blank" alt="{{$social->alt}}" class="w-8 h-8 rounded-full shadow-neu2 bg-red-500"><img src="{{$social->file_path}}"></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
