<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{
    #[Rule(['required', 'string', 'min:3'])]
    public string $title = '';

    #[Rule(['required'])]
    public string $body = '';

    public function store(): void
    {
        $user = User::find(1);
        // Jika ada validasi
        $validate = $this->validate();

        // Jika tidak ada validasi
        // $validate = $this->all();

        $user->post()->create($validate);

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
