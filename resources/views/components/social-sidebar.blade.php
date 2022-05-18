<aside class="hidden lg:flex fixed flex-col inset-y-0 gap-3 right-5 w-8 py-8 justify-end">
@foreach (App\Models\Social::get() as $social )
    <a href="{{$social->href}}" title="{{$social->alt}}" target="_blank" alt="{{$social->alt}}"><img src="{{$social->file_path}}" class="w-8 h-8 rounded-full bg-gray-100 hover:bg-red-500 transition-all duration-300"></a>
@endforeach
</aside>
