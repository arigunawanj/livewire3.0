<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{
    #[Rule(['required', 'string', 'min:3'])]
    public string $title = '';

    #[Rule(['required'])]
    public string $body = '';

    public function store(): void
    {

        // Jika ada validasi
        $validate = $this->validate();

        // Jika tidak ada validasi
        // $validate = $this->all();

        Auth::user()->post()->create($validate);

        flash('Berhasil Menambahkan Data Post', 'success');

        $this->reset();
    }

    public function update(): void
    {
        //
    }

    public function delete(): void
    {
        //
    }
}
