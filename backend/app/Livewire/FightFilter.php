<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\fights;

class FightFilter extends Component
{
    public $fights;

    public function render()
    {
        return view('livewire.fight-filter', ['fights' => $this->fights]);
    }
}
