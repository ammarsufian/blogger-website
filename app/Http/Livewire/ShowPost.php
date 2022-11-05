<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Domains\ApplicationManagement\Models\Post;

class ShowPost extends Component
{
    public Post $post;
    public string $meta_tags;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->meta_tags = $post->tags->implode('name', ',');
    }
    
    public function render()
    {
        return view('livewire.show-post');
    }
}
