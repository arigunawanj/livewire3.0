<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Rule;
use Livewire\Form;

class LoginForm extends Form
{
    #[Rule('required', 'email')]
    public string $email = '';

    #[Rule('required')]
    public string $password = '';

    public function submit()
    {
        if (Auth::attempt($this->validate())) {
            return redirect()->route('home');
        }

        throw ValidationException::withMessages([
            'formLogin.email' => 'Email yang anda masukkan belum terdaftar',
            'formLogin.password' => 'Password yang Anda masukkan salah'
        ]);
    }
}
