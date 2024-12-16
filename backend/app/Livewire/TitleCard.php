<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\fights;

class TitleCard extends Component
{
    public $fights;

    public function render()
    {
        return view('livewire.title-card');
    }
}
