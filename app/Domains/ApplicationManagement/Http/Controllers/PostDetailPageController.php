<?php

namespace App\Domains\ApplicationManagement\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domains\ApplicationManagement\Services\PostService;

class PostDetailPageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, PostService $postService)
    {
        $post = $postService->show($request);
        $tag_meta=$post->tags->implode('name', ',');
        $category=$post->category->posts;
        if(is_null($post)){
            return abort(404);
        }
        return view('post', compact('post','tag_meta','category'));
    }
}
