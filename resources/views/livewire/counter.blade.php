<div class="p-4 m-4 border-purple-600	border-2">
    <h2 class="text-xl text-center">{{$name}}</h2>
    <div class="grid grid-cols-2 gap-x-4">
        <div class="flex flex-col justify-end h-full">
            <h3 class="">Clams: {{$clam_count}}</h3>
            <button wire:click="clam_increment" class="bg-red-500 text-white py-4 px-2" >Clam Slam</button>
        </div>
        <div class="flex flex-col justify-end h-full">
            <h3 class="">Cherish Points: {{$cp_count}}</h3>
            <button wire:click="cp_increment" class="bg-green-500 text-white py-4 px-2">Cherish Me</button>
        </div>
    </div>
</div>
