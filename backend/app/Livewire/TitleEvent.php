<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\fights;

class TitleEvent extends Component
{
    public $fight;

    public function render()
    {
        return view('livewire.title-event');
    }
}
