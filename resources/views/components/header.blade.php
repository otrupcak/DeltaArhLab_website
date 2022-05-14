<header class="flex flex-row bg-gray-200 sticky top-0 h-20 shadow-lg">
    <div class="basis-1/6 justify-self-start self-center pl-5 pr-10">
        <a href="/">
        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 123.47 110.32" class="fill-gray-100 hover:fill-[#f44336] h-16 transition-all duration-300 ease-in-out">
            <g id="Logo"><a href="#">
            <path class="hover:fill-red-300 hover:stroke-red-500 hover:stroke-2" d="M70.37,10.64a10.64,10.64,0,1,0-3.11,7.52A10.58,10.58,0,0,0,70.37,10.64Z"/></a>
            <path d="M5.32,86.46a10.64,10.64,0,1,0,16,9.22,22.11,22.11,0,0,1,11-19.14,10.64,10.64,0,1,0-15.95-9.21A22.1,22.1,0,0,1,5.32,86.46Z"/>
            <path d="M48.69,86.46a10.64,10.64,0,1,0,0,18.43,22.07,22.07,0,0,1,22.09,0,10.64,10.64,0,1,0,0-18.43A22.07,22.07,0,0,1,48.69,86.46Z"/>
            <path d="M49.1,67.33a10.64,10.64,0,1,0,15.95-9.21A22.11,22.11,0,0,1,54,39a10.64,10.64,0,1,0-16,9.22A22.08,22.08,0,0,1,49.1,67.33Z"/>
            <path d="M81.83,67.33a10.64,10.64,0,1,0,16-9.21A22.09,22.09,0,0,1,86.74,39a10.64,10.64,0,1,0-16,9.22A22.08,22.08,0,0,1,81.83,67.33Z"/>
            <path d="M116.36,88.16a10.63,10.63,0,1,0,3.11,7.52A10.63,10.63,0,0,0,116.36,88.16Zm-7.53,13.9a6.39,6.39,0,1,1,6.39-6.38A6.38,6.38,0,0,1,108.83,102.06Z"/>
            </g>
        </svg> --}}

        <x-application-logo class="fill-gray-100 hover:fill-[#f44336] h-16 transition-all duration-300 ease-in-out" secret={{$secret}}/>

        </a>
    </div>
    {{-- ubaciti invisible lg:visible kada se implementira meni za male uređaje --}}
    <nav class="basis-2/3 grid grid-flow-col items-center justify-items-center font-medium text-gray-700">
        @if (Request::segment(1) == "about-us")
        <a href="/about-us" class="w-6/12 min-w-fit h-1/2 rounded-2xl border-gray-200 border text-red-500 bg-gradient-to-br from-[#cacaca] via-gray-200 to-gray-100 text-center py-1.5 px-2 cursor-default">O nama</a>
        @else
        <a href="/about-us" class="w-5/12 hover:w-6/12 min-w-fit h-1/2 rounded-2xl shadow-neu1 hover:shadow-neu2 hover:text-red-500 text-center py-1.5 px-2 transition-all duration-300">O nama</a>
        @endif
        @if (Request::segment(1) == "projects")
        <a href="/projects" class="w-6/12 min-w-fit h-1/2 rounded-2xl border-gray-200 border text-red-500 bg-gradient-to-br from-[#cacaca] via-gray-200 to-gray-100 text-center py-1.5 px-2 cursor-default">Projekti</a>
        @else
        <a href="/projects" class="w-5/12 hover:w-6/12 min-w-fit h-1/2 rounded-2xl shadow-neu1 hover:shadow-neu2 hover:text-red-500 text-center py-1.5 px-2 transition-all duration-300">Projekti</a>
        @endif
        @if (Request::segment(1) == "contact-us")
        <a href="/contact-us" class="w-6/12 min-w-fit h-1/2 rounded-2xl border-gray-200 border text-red-500 bg-gradient-to-br from-[#cacaca] via-gray-200 to-gray-100 text-center py-1.5 px-2 cursor-default">Kontakt</a>
        @else
        <a href="/contact-us" class="w-5/12 hover:w-6/12 min-w-fit h-1/2 rounded-2xl shadow-neu1 hover:shadow-neu2 hover:text-red-500 text-center py-1.5 px-2 transition-all duration-300">Kontakt</a>
        @endif
    </nav>
    {{-- slajder za biranje između engleskog i srpskog --}}
    {{-- <div class="basis-1/6 grid gap-2 grid-flow-col justify-end content-center pr-5">
        <span>srb</span>
        <input type="checkbox" id="lng" name="lng">
        <span>eng</span>
    </div> --}}
</header>
