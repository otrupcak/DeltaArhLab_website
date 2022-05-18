<x-master-layout title="Projekat" secret=True>
    <x-slot name="content">
        {{-- prikaz za komp --}}
        {{-- {{dd($project_prev)}} --}}
        <div class="hidden lg:grid gap-2 grid-cols-12">
            <div class="fixed col-span-1 grid grid-flow-row py-4 gap-4 text-gray-400 border-r-2 border-gray-100 pr-4">
                <a href="/projects" class=" hover:text-red-500 font-semibold text-sm text-center mr-2 px-2 w-full h-8 pt-1.5 self-center uppercase rounded-full shadow-neu2 hover:shadow-none transition-all duration-300">nazad</a href="projects">
                @if ($project_prev != null)
                    <a href="{{$project_prev->slug;}}" class=" hover:text-red-500 font-semibold text-sm text-center mr-2 px-2 w-full h-8 pt-1.5 self-center uppercase rounded-full shadow-neu2 hover:shadow-none transition-all duration-300">prethodni</a>
                @endif
                @if ($project_next != null)
                <a href="{{$project_next->slug;}}" class="hover:text-red-500 font-semibold text-sm text-center mr-2 px-2 w-full h-8 pt-1.5 self-center uppercase rounded-full shadow-neu2 hover:shadow-none transition-all duration-300">sledeći</a>
                @endif
            </div>
            <div class="col-span-4 col-start-2 pl-6">
                <h1 class="font-black text-6xl uppercase">{{$project->title}}</h1>
                <p class="font-medium mt-6">{{$project->excerpt}}</p>
            </div>
            <div class="col-start-7 col-span-5 aspect-video bg-gray-400 rounded-lg shadow-neu1"></div>
        </div>
        {{-- prikaz za mobilni --}}
        <div class="h-screen flex flex-col lg:hidden">
            <div class="bg-gray-400 rounded-md shadow-neu2 aspect-video"></div>
            <div class="mt-4 pl-2 self-start">
                <p class="text-3xl font-semibold uppercase">{{$project->title}}</p>
                <p class="font-normal mt-3">{{$project->excerpt}}</p>
            </div>

            <div class="content-end text-center mt-auto">
                <a href="/projects" class="hover:text-red-500 font-semibold text-sm uppercase ">nazad</a href="projects">
                @if ($project_prev != null)
                <span>  &bull; </span><a href="{{$project_prev->slug;}}" class="hover:text-red-500 font-semibold text-sm uppercase ">prethodni</a href="projects">
                @endif
                @if ($project_next != null)
                <span>  &bull; </span><a href="{{$project_next->slug;}}" class="hover:text-red-500 font-semibold text-sm uppercase ">sledeći</a href="projects">
                @endif
            </div>
        </div>
    </x-slot>
</x-master-layout>
