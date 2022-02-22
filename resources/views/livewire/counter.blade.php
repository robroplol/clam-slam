<div class="p-12 m-16 h-48">
    <h2>{{$name}}</h2>
    <div class="grid grid-cols-2">
        <div class="h-56 flex flex-col content-end">
            <h3 class="">Clams: {{$clam_count}}</h3>
            <button wire:click="clam_increment" class="bg-red-500 text-white py-4 px-2" >Clam Slam</button>
        </div>
        <div class="flex flex-col content-end h-12">
            <h3 class="">Cherish Points: {{$cp_count}}</h3>
            <button wire:click="cp_increment" class="bg-green-500 text-white py-4 px-2">Cherish Me</button>
        </div>
    </div>
</div>
