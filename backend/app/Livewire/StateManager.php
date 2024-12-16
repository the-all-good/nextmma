<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\fights;

class StateManager extends Component
{
    public $fights;
    public $cur_fight;

    public function render()
    {
        return view('livewire.state-manager');
    }

    public function set_current_fight($slug)
    {
        $this->cur_fight = $this->fights->groupBy('slug')[$slug];
    }
}
