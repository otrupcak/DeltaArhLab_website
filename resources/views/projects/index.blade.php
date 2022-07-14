<x-master-layout title="Projekti" secret=True>
    <x-slot name="content">
        <div class="grid gap-4 grid-cols-12">
            @foreach ($projects as $project)
            <div class="col-span-12 md:col-span-4 lg:col-span-3 bg-gray-300 aspect-square rounded-lg shadow-neu1 overflow-clip transition-all duration-200" style="background-image: url({{$project->image_src}});background-position: center;background-size: cover;;">
                <a href="projects/{{$project->slug;}}" class="grid content-end pl-5 pb-4 w-full h-full bg-[rgba(0,0,0,0.0)] hover:bg-[rgba(0,0,0,0.2)]  transition-all duration-150" >
                    <h2 class="text-white text-lg font-extrabold bottom-0 uppercase">{{$project->title;}}</h2>
                    <p class="text-white font-medium">{{$project->excerpt;}}</p>
                </a>
            </div>
            @endforeach
        </div>
    </x-slot>
</x-master-layout>
