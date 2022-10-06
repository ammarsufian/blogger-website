<?php

namespace App\Domains\ApplicationManagement\Http\Controllers;

use App\Domains\ApplicationManagement\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domains\ApplicationManagement\Services\PostService;
use App\Domains\ApplicationManagement\Services\CategoryService;

class IndexPageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request , CategoryService $categoryService, PostService $postService)
    {
        $categories = $categoryService->index($request);
        $posts = $postService->index($request);
        return view('index', compact('categories', 'posts'));

    }

}
