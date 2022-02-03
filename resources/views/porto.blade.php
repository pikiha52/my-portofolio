@extends('layouts')
@section('title', 'My Project')
@section('container')

    <div class="bg-cyan-500 shadow-md rounded-3xl md:w-full md:h-auto md:px-20 px-5 md:pt-20 pt-5 pb-5 md:pb-20 md:mb-4">
        
        <div class="flex justify-center items-center mb-6">
            <p class="text-3xl text-white font-poppins uppercase">MY PROJECT</p>
        </div>
        
        <div class="grid grid-cols-3 gap-4">

            <a href="">
                <div class="relative bg-cyan-500 shadow-md rounded-md w-full">
                    <img src="https://gosystemconsulting.co.id/media/HiRes-17.jpg" class="rounded-md" alt="">
                    <div class="absolute w-full h-full rounded-md py-2.5 bottom-0 inset-x-0 hover:bg-gray-300 hover:bg-opacity-50 text-transparent text-2xl hover:text-gray-700 flex justify-center items-center text-center leading-4">project name</div>
                </div>
            </a>
      
            <a href="">
                <div class="relative bg-cyan-500 shadow-md rounded-md w-full">
                    <img src="https://gosystemconsulting.co.id/media/HiRes-17.jpg" class="rounded-md" alt="">
                    <div class="absolute w-full h-full rounded-md py-2.5 bottom-0 inset-x-0 hover:bg-gray-300 hover:bg-opacity-50 text-transparent text-2xl hover:text-gray-700 flex justify-center items-center text-center leading-4">project name</div>
                </div>
            </a>
      
            <a href="">
                <div class="relative bg-cyan-500 shadow-md rounded-md w-full">
                    <img src="https://gosystemconsulting.co.id/media/HiRes-17.jpg" class="rounded-md" alt="">
                    <div class="absolute w-full h-full rounded-md py-2.5 bottom-0 inset-x-0 hover:bg-gray-300 hover:bg-opacity-50 text-transparent text-2xl hover:text-gray-700 flex justify-center items-center text-center leading-4">project name</div>
                </div>
            </a>
      
    </div>

    </div>

@endsection