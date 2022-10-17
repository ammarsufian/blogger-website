<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Domains\ApplicationManagement\Services\PostService;

class IndexPage extends Component
{
    protected $single_post;
    public function mount(PostService $postService)
    {
        $this->single_post = $postService->showOnHomePage();
    }

    public function render()
    {
        return view('livewire.index-page', [
            'single_post' => $this->single_post
        ]);
    }
}
