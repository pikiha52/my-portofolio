@extends('layouts')
@section('title', 'Welcome to my Portofolio')
@section('container')
<div class="bg-cyan-500 dark:bg-gray-900 shadow-md rounded-3xl md:w-full md:h-auto md:px-20 px-5 md:pt-20 pt-5 pb-5 md:pb-20 md:mb-4">
  
    {{-- desktop --}}
    <div class="hidden md:grid md:grid-cols-2">
        <div class="flex justify-center items-center">
            <div class="grid-rows-none">
                <p class="text-white text-left font-poppins text-4xl">Hello, my name Fikih Alan people used to call me Pikih or Kih</p>
                <p class="text-gray-800 dark:text-white font-poppins text-xs py-10">I'am a Full Stack Developer, i can use Laravel, Codeigniter, Docker, Flutter, Tailwindcss, Bootstrap, Javascript, NodeJs.</p>
                <div class="grid grid-cols-2">
                    <a href="mailto:pikiha52@gmail.com?subject = Feedback&body = Message" class="bg-gray-900 dark:bg-gradient-to-r dark:from-amber-500 dark:to-red-500 w-44 h-10 hover:bg-transparent hover:outline hover:outline-offset-4 hover:rounded-md rounded-md hover:outline-2">
                        <p class="text-center font-poppins text-white text-sm pt-2">CONTACT ME</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="w-auto">
            <img src="{{ asset('assets/content/home.png') }}" alt="">
        </div>
    </div>
    {{-- end --}}
    
    {{-- mobile --}}
    <div class="md:hidden bg-cyan-500 dark:bg-gray-900 shadow-md rounded-3xl px-5 pt-5 pb-5">
        <div class="w-auto">
            <img src="{{ asset('assets/content/home.png') }}" alt="">
        </div>
        <div class="flex justify-center items-center">
            <div class="grid-rows-none">
                <p class="text-white text-left font-poppins text-xl">Hello, my name Fikih Alan people used to call me Pikih or Kih</p>
                <p class="text-gray-800 dark:text-white font-poppins text-xs py-10">I'am a Full Stack Developer, i can use Laravel, Codeigniter, Docker, Flutter, Tailwindcss, Bootstrap, Javascript, NodeJs.</p>
                <div class="grid grid-cols-2">
                    <a href="mailto:pikiha52@gmail.com?subject = Feedback&body = Message" class="bg-gray-900 dark:bg-gradient-to-r dark:from-amber-500 dark:to-red-500 w-24 h-10 hover:bg-transparent hover:outline hover:outline-offset-4 hover:rounded-md rounded-md hover:outline-2">
                        <p class="text-center font-poppins text-white text-xs pt-3">CONTACT ME</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- end --}}

</div>

<div class="flex justify-center py-6">
    <p class="font-poppins text-2xl text-gray-600 dark:text-white uppercase font-extrabold leading-4">My Project</p>
</div>

{{-- desktop --}}
<div class="hidden md:grid md:grid-cols-3 md:gap-4">

        <div class="relative bg-cyan-500 dark:bg-white shadow-md rounded-md w-full">
            <img src="{{ asset('assets/project/home-coffeeshop.png') }}" class="rounded-md w-fit" alt="">
            <div class="absolute w-full h-full rounded-md py-2.5 bottom-0 inset-x-0 hover:bg-gray-300 hover:bg-opacity-50 text-transparent font-extrabold text-2xl hover:text-gray-700 flex justify-center items-center text-center leading-4 uppercase">Manajemen Coffeshop</div>
        </div>
        <div class="relative bg-cyan-500 dark:bg-white shadow-md rounded-md w-full">
            <img src="{{ asset('assets/project/home-bmx.png') }}" class="rounded-md" alt="">
            <div class="absolute w-full h-full rounded-md py-2.5 bottom-0 inset-x-0 hover:bg-gray-300 hover:bg-opacity-50 text-transparent font-extrabold text-2xl hover:text-gray-700 flex justify-center items-center text-center leading-4 uppercase">E-commerce bmx</div>
        </div>
        <div class="relative bg-cyan-500 dark:bg-white shadow-md rounded-md w-full">
            <img src="{{ asset('assets/project/web-pos.png') }}" class="rounded-md" alt="">
            <div class="absolute w-full h-full rounded-md py-2.5 bottom-0 inset-x-0 hover:bg-gray-300 hover:bg-opacity-50 text-transparent font-extrabold text-2xl hover:text-gray-700 flex justify-center items-center text-center leading-4 uppercase">Point of Sale Coffe Shop</div>           
        </div>
  
</div>
{{-- end --}}

{{-- mobile --}}
<div class="md:hidden grid grid-rows-3 gap-2">
    
    <div class="relative bg-cyan-500 dark:bg-white shadow-md rounded-md w-full">
        <img src="{{ asset('assets/project/home-coffeeshop.png') }}" class="rounded-md w-fit" alt="">
        <div class="absolute w-full h-full rounded-md py-2.5 bottom-0 inset-x-0 hover:bg-gray-300 hover:bg-opacity-50 text-transparent font-extrabold text-xl hover:text-gray-700 flex justify-center items-center text-center leading-4 uppercase">Manajemen Coffeshop</div>
    </div>
    <div class="relative bg-cyan-500 dark:bg-white shadow-md rounded-md w-full">
        <img src="{{ asset('assets/project/home-bmx.png') }}" class="rounded-md" alt="">
        <div class="absolute w-full h-full rounded-md py-2.5 bottom-0 inset-x-0 hover:bg-gray-300 hover:bg-opacity-50 text-transparent font-extrabold text-xl hover:text-gray-700 flex justify-center items-center text-center leading-4 uppercase">E-commerce bmx</div>
    </div>
    <div class="relative bg-cyan-500 dark:bg-white shadow-md rounded-md w-full">
        <img src="{{ asset('assets/project/web-pos.png') }}" class="rounded-md" alt="">
        <div class="absolute w-full h-full rounded-md py-2.5 bottom-0 inset-x-0 hover:bg-gray-300 hover:bg-opacity-50 text-transparent font-extrabold text-xl hover:text-gray-700 flex justify-center items-center text-center leading-4 uppercase">Point of Sale Coffe Shop</div>
    </div>

</div>
@endsection