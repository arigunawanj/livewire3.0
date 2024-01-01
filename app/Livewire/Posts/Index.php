<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\On;

class Index extends Component
{
    #[On('postCreated')]

    public function updateList($post)
    {
        # code...
    }
    public function render()
    {
        $posts = Post::query()->with('user')->latest()->get();
        return view('livewire.posts.index', compact('posts'));
    }
}
