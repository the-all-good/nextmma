<div class="flex justify-between content-between">
    <div id="title-event">
        <div class="flex justify-between content-between">
            <p class="text-gray-500 pr-1">NEXT EVENT / </p><p class="text-white"> UFC</p>
        </div>
    </div>

    <div id="title-name" class="text-white text-x2">
        {{isset($fight) ? $fight->first()->slug : "Please select fight"}}
    </div>
    <div id="title-time">
        <p class="text-gray-500">{{isset($fight) ? $fight->first()->timestamp : "Please select fight"}}</p>
    </div>
</div>