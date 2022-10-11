<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Http\Request;
use App\Domains\ApplicationManagement\Models\Post;
use App\Domains\ApplicationManagement\Models\Category;
use App\Domains\ApplicationManagement\Services\PostService;
use App\Domains\ApplicationManagement\Services\CategoryService;

class Categories extends Component
{
    public  $categories;
    public  $category=null;
    public  $posts= null;

    public function increment()
    {
        $this->posts=Post::latest()->limit(10)->get();
    }

    public function showPostsByCategory($id)
    {
        $this->category= Category::find($id);
        $this->posts = $this->category->posts;

    }
    public function showAllPosts(Request $request ,PostService $postService)
    {
        $this->posts = $postService->index($request);
        $this->category=null;
    }

    public function render(Request $request, CategoryService $categoryService, PostService $postService)
    {
        $this->categories = $categoryService->index($request);
        if($this->posts==null)
        {
            $this->posts = $postService->index($request);
        }
        return view('livewire.categories');

    }
}
