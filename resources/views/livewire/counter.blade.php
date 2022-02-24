<div class="p-4 m-4  bg-white">
    <h2 class="text-xl text-center">{{$name}}</h2>
    <div class="grid grid-cols-2 gap-x-4">
        <div class="flex flex-col justify-end h-full">
            <h3 class="">Clams: {{$clam_count}}</h3>
            <button wire:click="clam_increment" class="border-red-500 border-2 text-red-500 hover:bg-red-500 hover:text-white py-4 px-2" >Clam Slam</button>
        </div>
        <div class="flex flex-col justify-end h-full">
            <h3 class="">Cherish Points: {{$cp_count}}</h3>
            <button wire:click="cp_increment" class="border-green-500 border-2 text-green-700 hover:bg-green-500 hover:text-white py-4 px-2">Cherish Me</button>
        </div>
    </div>
</div>
