<?php

namespace App\Livewire;

use App\Livewire\Forms\LoginForm;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest')]
class Login extends Component
{
    public LoginForm $formLogin;

    public function login()
    {
        $this->formLogin->submit();
    }

    public function render()
    {
        return view('livewire.login');
    }
}
