<?php

namespace App\Livewire;

use Livewire\Component;

class FightSelect extends Component
{
    public $fight;

    public function render()
    {
        return view('livewire.fight-select');
    }

    public function select_fight(){
        $this->dispatch('select_fight', fight: $this->fight);
    }
}
