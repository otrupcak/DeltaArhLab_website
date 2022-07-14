<x-master-layout secret=True>
    <x-slot name="content">
        <div id="div123" class="grid grid-cols-12">
            {{-- <h1 class="col-start-2 col-end-12 text-red-500 text-5xl font-black text-center uppercase leading-normal">
                Delta Arh Lab
            </h1> --}}

            {{-- <input type="range" name="slider" id="slider" min="100" max="1000" value="500" onchange="document.getElementById('canvas').width = document.getElementById('slider').value"> --}}
            <canvas id="canvas" class=" uppercase">
            </canvas>
        </div>
    </x-slot>
</x-master-layout>
