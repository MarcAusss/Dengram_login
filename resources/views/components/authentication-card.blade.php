<div class="min-h-screen flex justify-center items-center pt-6 sm:pt-0 bg-black gap-36">
    <div class="w-1/3">
        <img src="{{url('img/Screenshot 2025-05-15 172020.png')}}" alt="" class="w-full h-full">
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 overflow-hidden sm:rounded-lg ">
       <img src="{{url('img/logoimg.png')}}" alt="" class="w-1/2 h-1/2 mx-auto mb-4">
        {{ $slot }}
    </div>
</div>
