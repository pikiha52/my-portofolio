<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- TAILWIND CSS --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- CSS FONT --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    @livewireStyles
</head>
<body>

    <body class="bg-cyan-100 dark:bg-black pt-10">
        <div class="flex h-auto justify-center ">
            <div class="bg-white dark:bg-gray-700 shadow-xl rounded-2xl w-11/12 px-20 pt-6 pb-6 mb-4">
                <div class="bg-white mb-6 pb-4 dark:bg-gray-700">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6">
                        <div class="flex justify-between items-center border-gray-100 py-6 md:justify-start md:space-x-10">
                            <div class="flex justify-start lg:w-0 lg:flex-1">
                                <a href="/" class="hover:rounded-full hover:bg-cyan-500 hover:px-1 hover:opacity-75 hover:py-1">
                                    <img class="h-8 w-auto sm:h-10" src="{{ asset('assets/content/icon.png') }}" alt="">
                                </a>
        
                                <div class="px-20 flex items-center">
                                    <div class="flex justify-between">
                                        
                                        <div class="px-10">
                                            <a href="{{ route('my-projects') }}" class="text-gray-500 dark:text-white hover:bg-gray-200 hover:rounded-md hover:py-4 hover:px-4 hover:transition hover:duration-200 hover:ease-in-out hover:text-cyan-500 font-poppins items-center">PORTOFOLIO</a>
                                        </div>
        
                                        <div class="">
                                            <a href="{{ route('my-cv') }}" class="text-gray-500 dark:text-white hover:bg-gray-200 hover:rounded-md hover:py-4 hover:px-4 hover:transition hover:duration-200 hover:ease-in-out hover:text-cyan-500 font-poppins items-center">CURRICULLUM VITAE</a>
                                        </div>
                                            
                                    </div>
                                </div>
        
        
                            </div>
        
                        </div>
                    </div>
                </div>

                {{-- content --}}
                @yield('container')
                {{-- end content --}}
        
            </div>
        
            <!-- End -->
        </div>
        @livewireScripts
    </body>

</body>

</html>