<x-master-layout title="Kontak" secret=True>
    <x-slot name="content">
        <div class="flex flex-col lg:grid grid-cols-12 gap-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4589.964024975946!2d19.846113260079704!3d45.24413568924558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475b10127ce968e3%3A0x424c561c50393414!2sNau%C4%8Dno-tehnolo%C5%A1ki%20park%20Novi%20Sad!5e0!3m2!1sen!2srs!4v1652883293743!5m2!1sen!2srs"
            width="100%" class="rounded-lg shadow-neu2 w-full aspect-square md:aspect-video max-h-80 lg:col-span-10 lg:col-start-2" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" alt="google maps"></iframe>
            <div class=" w-full lg:col-span-10 lg:col-start-2 flex flex-wrap gap-4 h-max">
                <div class="shadow-neu2 w-full lg:w-auto rounded-lg p-8 flex flex-col justify-center">
                    <address class="font-sans not-italic">
                        <ul>
                            <li class=" mb-2 text-red-500"><b>Delta Arh Lab DOO Novi Sad</b></li>
                            <li class=" mb-2">Fruškogorska 1 (<a href="https://ntpns.rs/" class="hover:text-[#006099] active:text-[#006099]">NTP NS</a>),<br>21000 Novi Sad, Srbija</li>
                            <li><b>tel: </b><a href="https://wa.me/381616037837" target="_blank" class="hover:text-red-500 active:text-red-500">+381 61 6037837</a></li>
                            <li><b>email: </b><a href="mailto:contactus@deltaarhlab.com" target="_blank" class="hover:text-red-500 active:text-red-500">contactus@deltaarhlab.com</a></li>
                            <li><b>PIB: </b>112814059</li>
                            <li><b>MB: </b>21745103</li>
                        </ul>
                    </address>
                </div>
                <div class="grow grid grid-cols-2 gap-4 text-center h-72">
                    @foreach (App\Models\Social::where('alt','!=','email')->get() as $social )
                    <a href="{{$social->href}}" target="_blank" alt="{{$social->alt}}" class="col-span-1 rounded-lg shadow-neu2 hover:shadow-neu1 flex flex-col justify-center content-center transition-all duration-300 group"><img src="{{$social->file_path}}" class="w-12 h-12 rounded-full self-center group-hover:bg-red-500 transition-all duration-300"></img></a>
                    @endforeach
                </div>
            </div>
        </div>
    </x-slot>
</x-master-layout>
