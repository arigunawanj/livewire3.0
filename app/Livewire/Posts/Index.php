<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Attributes\Lazy;
use Livewire\Component;
use Livewire\Attributes\On;

class Index extends Component
{
    #[On('postCreated')]
    #[Lazy]
    public function updateList($post)
    {
        # code...
    }

    public function placeholder()
    {
        // CARA 1
        // return <<<BLADE
        //     <div>
        //         LOADING . . . .
        //     </div>
        // BLADE;

        // CARA 2
        return view('livewire.posts.placeholder');
    }
    public function render()
    {
        // sleep(2);
        $posts = Post::query()->with('user')->latest()->get();
        return view('livewire.posts.index', compact('posts'));
    }
}
