<?php

namespace App\Http\Livewire;


use Livewire\Component;
use Illuminate\Http\Request;
use App\Domains\ApplicationManagement\Models\Post;
use App\Domains\ApplicationManagement\Services\CategoryService;

class Categories extends Component
{
    public  $categories;
    public  $category_id = 0;
    public int $count = 1;
    public int $lastPage;
    public $listeners = ['next', 'previous'];
    protected array $posts = [];

    public function render(Request $request, CategoryService $categoryService)
    {
        $this->categories = $categoryService->index($request);

        return view('livewire.categories', ['posts' => $this->posts]);
    }

    public function loadData(): void
    {
        $post = Post::latest()->paginate(5, ['*'], 'page', 1);
        array_push($this->posts, ...$post);
        $this->lastPage = $post->lastPage();
    }

    public function showPostsByCategory($id)
    {
        $this->category_id = $id;
        $post = Post::where('category_id', $id)->latest()->paginate(5, ['*'], 'page', 1);
        array_push($this->posts, ...$post);
        $this->lastPage = $post->lastPage();
        $this->count = 1;
    }

    public function showAllPosts()
    {
        $posts = Post::latest()->paginate(5, ['*'], 'page', 1);
        array_push($this->posts, ...$posts);
        $this->lastPage = $posts->lastPage();
        $this->category_id = 0;
        $this->count = 1;
    }

    public function next(): void
    {
        $page = ++$this->count;
        if ($this->category_id == 0) {
            array_push($this->posts, ...Post::latest()->paginate(5, ['*'], 'page', $page));
        } else {
            array_push($this->posts, ...Post::where('category_id', $this->category_id)->latest()->paginate(5, ['*'], 'page', $page));
        }
    }

    public function previous(): void
    {
        $page = --$this->count;
        if ($this->category_id == 0) {
            array_push($this->posts, ...Post::latest()->paginate(5, ['*'], 'page', $page));
        } else {
            array_push($this->posts, ...Post::where('category_id', $this->category_id)->latest()->paginate(5, ['*'], 'page', $page));
        }
    }
}
