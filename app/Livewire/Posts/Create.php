<?php

namespace App\Livewire\Posts;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Create extends Component
{
    #[Rule(['required', 'string', 'min:3'])]
    public string $title = '';

    #[Rule(['required'])]
    public string $body = '';

    public function save()
    {
        $user = User::find(1);
        $validate = $this->validate();
        $user->post()->create($validate);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}
