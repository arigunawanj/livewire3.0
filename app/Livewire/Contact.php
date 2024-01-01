<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Contact extends Component
{
    #[Title('Contact')]
    public function render()
    {
        sleep(3);

        return view('livewire.contact');
    }
}
