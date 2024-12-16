<div>
    <div id="heading" class="w-full flex content-between justify-between">
        <p class="text-white text-lg">
            NEXTMMA
        </p>
        <div class="text-white text-lg flex justify-between">
            <form action="">
                <input type="radio" name="time" value="my-time"><label for="my-time" class="pr-4">My Time</label></input>
                <input type="radio" name="time" value="local-time"><label for="local-time" class="pr-4">Local Time</label></input>
            </form>
        </div>
    </div>
    <div id="body" class="w-full flex justify-between">
        <div id="body-match" class="w-3/4">
            <div class="w-full">
                <livewire:title-event key="{{now()}}" :fight="$cur_fight"/>
                <div class="h-60 bg-green-950 flex flex-col content-end justify-end">
                    <div class="flex justify-between">
                        <div>
                            <p class="text-white font-bold">Main card</p><p class="text-white">11:00 AM AEST</p>
                        </div>
                        <div>
                            <div>
                                TIME UNTIL MAIN CARD
                            </div>
                            <div>
                                <div class="flex justify-evenly">
                                    <p class="text-yellow-300 text-3xl pl-2">01</p><p class="text-yellow-900 text-xl">DAYS</p>
                                    <p class="text-yellow-300 text-3xl pl-2">03</p><p class="text-yellow-900 text-xl">HOURS</p>
                                    <p class="text-yellow-300 text-3xl pl-2">35</p><p class="text-yellow-900 text-xl">MINS</p>
                                    <p class="text-yellow-300 text-3xl pl-2">51</p><p class="text-yellow-900 text-xl">SEC</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <!--EMPTY SPACE -->
                        </div>
                    </div>
                </div>
                <livewire:title-card key="{{now()}}" :fights="$cur_fight"/>
            </div>
        </div>
        <div id="promotion-navigation" class="bg-gray-800 w-1/4 min-w-96 items-center text-center">
            @foreach ($fights->groupBy('slug') as $slug => $fight)
                <div class="w-full text-white">
                    <div class="border-y-2 border-gray-100 hover:bg-gray-600" wire:click="set_current_fight('{{ addslashes($slug) }}')">
                        {{$slug}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>