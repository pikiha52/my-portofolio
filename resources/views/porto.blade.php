@extends('layouts')
@section('title', 'My Project')
@section('container')

    <div class="bg-cyan-500 dark:bg-gray-900 shadow-md rounded-3xl md:w-full md:h-auto md:px-20 px-5 md:pt-20 pt-5 pb-5 md:pb-20 md:mb-4">
        
        <div class="flex justify-center items-center mb-6">
            <p class="text-sm md:text-3xl text-white font-poppins uppercase">MY PROJECT</p>
        </div>

        <livewire:search-portofolio /> 

    </div>

@endsection