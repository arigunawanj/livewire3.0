<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{
    #[Rule(['required'])]
    public string $body = '';

    public function store()
    {

        // Jika ada validasi
        $validate = $this->validate();

        // Jika tidak ada validasi
        // $validate = $this->all();

        $post = Auth::user()->post()->create($validate);

        flash('Berhasil Menambahkan Data Post', 'success');

        $this->reset();

        return $post;
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
