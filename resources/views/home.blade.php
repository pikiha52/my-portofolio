@extends('layouts')
@section('title', 'Welcome to my Portofolio')
@section('container')
<div class="flex h-auto justify-center ">
    <div class="bg-white shadow-xl rounded-2xl w-11/12 px-20 pt-6 pb-6 mb-4">
        <div class="bg-white mb-6 pb-4">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="flex justify-between items-center border-gray-100 py-6 md:justify-start md:space-x-10">
                    <div class="flex justify-start lg:w-0 lg:flex-1">
                        <a href="/">
                            <span class="sr-only">Workflow</span>
                            <img class="h-8 w-auto sm:h-10" src="{{ asset('assets/content/icon.png') }}" alt="">
                        </a>

                        <div class="px-20 flex items-center">
                            <div class="flex justify-between">
                                <div class="px-10">
                                    <a href="" class="text-gray-500 hover:bg-gray-200 hover:rounded-md hover:py-4 hover:px-4 hover:transition hover:duration-200 hover:ease-in-out hover:text-cyan-500 font-poppins items-center">PORTOFOLIO</a>
                                </div>

                                <div class="">
                                    <a href="" class="text-gray-500 hover:bg-gray-200 hover:rounded-md hover:py-4 hover:px-4 hover:transition hover:duration-200 hover:ease-in-out hover:text-cyan-500 font-poppins items-center">CURRICULLUM VITAE</a>
                                </div>
                                    
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>

        <div class="bg-cyan-500 shadow-md rounded-3xl md:w-full md:h-auto md:px-20 px-5 md:pt-20 pt-5 pb-5 md:pb-20 md:mb-4">
            <div class="grid grid-cols-2">
                <div class="flex justify-center items-center">
                    <div class="grid-rows-none">
                        <p class="text-white text-left font-poppins text-4xl">Hello, my name Fikih Alan people used to call me Pikih or Kih</p>
                        <p class="text-gray-800 font-poppins text-sm py-10">I'am a Fullstack Developer, i can use Framework Laravel, Codeigniter, Flutter, Tailwindcss. I really like the new thing about programming. </p>
                        <div class="grid grid-cols-2">
                            <a href="" class="bg-gray-900 w-44 h-10 hover:bg-transparent hover:outline hover:outline-offset-4 hover:rounded-md rounded-md hover:outline-2">
                                <p class="text-center font-poppins text-white text-sm pt-2">CONTACT ME</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-auto">
                    <img src="{{ asset('assets/content/home.png') }}" alt="">
                </div>
            </div>
        </div>

        <div class="flex justify-center py-4">
            <p class="font-poppins text-3xl text-gray-400">My Project</p>
        </div>

        <div class="grid grid-cols-3 gap-4">

                <div class="relative bg-cyan-500 shadow-md rounded-md w-full">
                    <img src="https://gosystemconsulting.co.id/media/HiRes-17.jpg" class="rounded-md" alt="">
                    <div class="absolute w-full h-full rounded-md py-2.5 bottom-0 inset-x-0 hover:bg-gray-300 hover:bg-opacity-50 text-transparent text-2xl hover:text-gray-700 flex justify-center items-center text-center leading-4">project name</div>
                </div>
          
                <div class="relative bg-cyan-500 shadow-md rounded-md w-full">
                    <img src="https://gosystemconsulting.co.id/media/HiRes-17.jpg" class="rounded-md" alt="">
                    <div class="absolute w-full h-full rounded-md py-2.5 bottom-0 inset-x-0 hover:bg-gray-300 hover:bg-opacity-50 text-transparent text-2xl hover:text-gray-700 flex justify-center items-center text-center leading-4">project name</div>
                </div>
          
                <div class="relative bg-cyan-500 shadow-md rounded-md w-full">
                    <img src="https://gosystemconsulting.co.id/media/HiRes-17.jpg" class="rounded-md" alt="">
                    <div class="absolute w-full h-full rounded-md py-2.5 bottom-0 inset-x-0 hover:bg-gray-300 hover:bg-opacity-50 text-transparent text-2xl hover:text-gray-700 flex justify-center items-center text-center leading-4">project name</div>
                </div>
          
        </div>

    </div>

    <!-- End -->
</div>
@endsection