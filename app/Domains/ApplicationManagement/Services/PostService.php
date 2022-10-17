<?php

namespace App\Domains\ApplicationManagement\Services;

use Exception;
use Illuminate\Http\Request;
use App\Domains\ApplicationManagement\Models\Post;
use App\Domains\ApplicationManagement\Actions\GetPostListAction;
use App\Domains\ApplicationManagement\Actions\GetPostByCategoryAction;

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
            $results = Post::ShowOnHomePage();
        } catch (Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
                'success' => false
            ], 400);
        }
        return $results;
    }

    public function showByCategory(int $category_id, int $page=1)
    {
        try {
            $results = (new GetPostByCategoryAction($category_id, $page))->execute();
        } catch (Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
                'success' => false
            ], 400);
        }
        return $results;
    }

}
