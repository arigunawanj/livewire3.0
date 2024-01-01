<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class Timeline extends Component
{
    #[Title('Timeline')]
    public function render()
    {
        return view('livewire.timeline');
    }
}
