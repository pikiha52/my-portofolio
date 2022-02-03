<div>
    <div class="flex justify-start items-start mb-7">
        <input wire:model="search" type="search" class="rounded-md w-full h-10 focus:text-cyan-500 focus:font-poppins px-4 placeholder:text-gray-300 placeholder:font-poppins" placeholder="Search projects by title...">
    </div>
    
    <div class="grid grid-cols-3 gap-4">
        @foreach ($portofolio as $value)
        <a href="{{ route('my-projects-details', $value->id) }}">
            <div class="relative bg-cyan-500 shadow-md rounded-md w-full">
                <img src="https://gosystemconsulting.co.id/media/HiRes-17.jpg" class="rounded-md" alt="">
                <div class="absolute w-full h-full rounded-md py-2.5 bottom-0 inset-x-0 hover:bg-gray-300 hover:bg-opacity-50 text-transparent text-xl uppercase hover:text-gray-700 hover:font-extrabold flex justify-center items-center text-center leading-4">{{ $value->name }}</div>
            </div>
        </a>                
        @endforeach
</div>
</div>
