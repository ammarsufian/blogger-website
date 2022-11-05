<?php

namespace App\Domains\ApplicationManagement\Services;

use Exception;
use Illuminate\Http\Request;
use App\Domains\ApplicationManagement\Models\Post;
use App\Domains\ApplicationManagement\Actions\GetPostListAction;
use App\Domains\ApplicationManagement\Actions\GetPostByCategoryIdAction;

class PostService
{
    public function index(int $page=1)
    {
        try {
            $results = (new GetPostListAction($page))->execute();
        } catch (Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
                'success' => false
            ], 400);
        }

        return $results;
    }

    public function showOnHomePage()
    {
        try {
            $results = Post::ShowByTags(Post::SHOW_ON_HOMEPAGE, Post::TYPE_SHOW_ON_HOMEPAGE);
        } catch (Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
                'success' => false
            ], 400);
        }
        return $results;
    }

    public function showByCategoryId(int $category_id, int $page=1)
    {
        try {
            $results = (new GetPostByCategoryIdAction($category_id, $page))->execute();
        } catch (Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
                'success' => false
            ], 400);
        }
        return $results;
    }

}
