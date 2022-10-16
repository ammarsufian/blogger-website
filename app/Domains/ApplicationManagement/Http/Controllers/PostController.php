<?php

namespace App\Domains\ApplicationManagement\Http\Controllers;

use App\Domains\ApplicationManagement\Models\Post;
use App\Domains\ApplicationManagement\Services\PostService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(Request $request, PostService $postService)
    {
        return view('index')->with([
            'post' => $postService->showOnHomePage($request)
        ]);
    }

    public function show(Post $post)
    {
        return view('post')->with([
            'post' => $post
        ]);
    }
}
