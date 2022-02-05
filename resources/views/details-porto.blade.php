@extends('layouts')
@section('title', 'Details Project '. $portofolio->name);
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
@section('container')

<div class="bg-cyan-500 dark:bg-gray-900 shadow-md rounded-3xl md:w-full md:h-auto md:px-20 px-5 md:pt-20 pt-5 pb-5 md:pb-20 md:mb-4">

    <div class="flex justify-center items-center mb-4">
        <p class="font-extrabold font-poppins text-2xl bg-gray-100 rounded-lg text-center uppercase text-cyan-500 dark:text-gray-900 px-4 py-4">{{ $portofolio->name }}</p>
    </div>

        {{-- carousell --}}
    <div class="px-4 rounded-2xl w-full h-auto">
        <div id="carouselExampleControls" class="carousel slide relative" data-bs-ride="carousel">

           @foreach ($portofolio->details as $detail)
            <div class="carousel-inner relative w-full overflow-hidden rounded-lg">
              <div class="carousel-item active relative float-left w-full">
                <img
                  src="{{ asset('assets/project/'.$detail->image) }}"
                  class="block w-full"
                  alt="Wild Landscape"
                />
              </div>
            @endforeach

            </div>

            <button
              class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
              type="button"
              data-bs-target="#carouselExampleControls"
              data-bs-slide="prev"
            >
              <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
              type="button"
              data-bs-target="#carouselExampleControls"
              data-bs-slide="next"
            >
              <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
    {{-- end carousell --}}

</div>


@endsection