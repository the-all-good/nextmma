<div id="promotion-navigation" class="bg-gray-800 w-1/4 min-w-96 items-center text-center">
    @foreach ($fights->groupBy('slug') as $slug => $fight)
        <div class="w-full text-white">
            <div class="border-y-2 border-gray-100 hover:bg-gray-600" wire:click="select_fight">  
                {{$fight}}
            </div>
        </div>
    @endforeach
</div>