<?php

namespace App\Http\Livewire;


use Livewire\Component;
use Illuminate\Http\Request;
use App\Domains\ApplicationManagement\Models\Post;
use App\Domains\ApplicationManagement\Services\CategoryService;
use App\Domains\ApplicationManagement\Services\PostService;

class Categories extends Component
{
    public  $categories;
    public  $category_id;
    public int $count;
    public int $lastPage;
    public $listeners = ['next', 'previous'];
    protected array $posts = [];

    public function mount(CategoryService $categoryService)
    {
        $this->categories = $categoryService->index();
        $this->category_id = 0;
        $this->count = 1;
    }

    public function loadData(PostService $postService):void
    {
        $post = $postService->index();
        array_push($this->posts, ...$post);
        $this->lastPage = $post->lastPage();
    }

    public function showPostsByCategory(PostService $postService, $id)
    {
        $this->category_id = $id;
        $post = $postService->showByCategory($id);
        array_push($this->posts, ...$post);
        $this->lastPage = $post->lastPage();
        $this->count = 1;
    }

    public function showAllPosts(PostService $postService)
    {
        $this->category_id = 0;
        $posts = $postService->index();
        array_push($this->posts, ...$posts);
        $this->lastPage = $posts->lastPage();
        $this->count = 1;
    }

    public function next(PostService $postService): void
    {
        $page = ++$this->count;
        if ($this->category_id == 0) {
            array_push($this->posts, ...$postService->index($page));
        } else {
            array_push($this->posts, ...$postService->showByCategory($this->category_id, $page));
        }
    }

    public function previous(PostService $postService): void
    {
        $page = --$this->count;
        if ($this->category_id == 0) {
            array_push($this->posts, ...$postService->index($page));
        } else {
            array_push($this->posts, ...$postService->showByCategory($this->category_id, $page));
        }
    }

    public function render()
    {
        return view('livewire.categories', ['posts' => $this->posts]);
    }
}
