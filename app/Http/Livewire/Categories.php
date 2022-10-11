<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Http\Request;
use App\Domains\ApplicationManagement\Models\Category;
use App\Domains\ApplicationManagement\Services\CategoryService;
use App\Domains\ApplicationManagement\Services\PostService;

class Categories extends Component
{
    public  $categories;
    public  $category;
    public  $posts;

    public function render(Request $request, CategoryService $categoryService, PostService $postService)
    {
        $this->categories = $categoryService->index($request);
        $this->posts = $postService->index($request);
        return view('livewire.categories');

    }

    public function showPostsByCategory($id)
    {
        $this->category= Category::find($id);
        $this->posts = $this->category->posts;

    }
    public function showAllPosts(Request $request ,PostService $postService)
    {
        $this->posts = $postService->index($request);

    }

}
