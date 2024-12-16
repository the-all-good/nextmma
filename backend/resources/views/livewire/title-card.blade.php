<div class=" justify-evenly">
    @if(isset($fights))
    <table class="w-full">
        <tbody>
        @foreach ($fights as $fight)
            <tr class="text-gray-400">
                <td>
                    <p>{{ $fight->category}}</p>
                </td>
                <td class="flex flex-col p-2">
                    <p class="justify-center text-white text-end">
                            {{ $fight->get_fighter($fight->fighter_1_id)->name }}
                    </p>
                    <p class="text-gray-500 text-end">
                            9 - 1 - 0
                    </p>
                </td>
                <td class="justify-center">
                    <div class="bg-white rounded-full w-10 h-10"></div>
                </td>
                <td class="justify-center p-2">
                    <div class="text-white rounded-full bg-gray-700 px-2 max-w-10 text-center">
                        VS
                    </div>
                </td>
                <td class="justify-center">
                    <div class="bg-white rounded-full w-10 h-10"></div>
                </td>
                <td class="flex flex-col p-2">
                    <p class="justify-center text-white text-start">
                            {{ $fight->get_fighter($fight->fighter_2_id)->name }}
                    </p>
                    <p class="text-gray-500 text-start">
                            9 - 1 - 0
                    </p>
                </td>
            </tr>  
        @endforeach
        </tbody>
    </table>
    @endif
</div>
