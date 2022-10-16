<?php

namespace App\Domains\ApplicationManagement\Services;

use App\Domains\ApplicationManagement\Actions\GetPostListAction;
use App\Domains\ApplicationManagement\Actions\GetPostDetailAction;
use App\Domains\ApplicationManagement\Models\Post;
use Exception;
use Illuminate\Http\Request;

class PostService
{
    public function index(Request $request)
    {
        try {
            $results = (new GetPostListAction($request))->execute();
        } catch (Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
                'success' => false
            ], 400);
        }

        return $results;
    }

    public function show(Request $request)
    {
        try {
            $results = (new GetPostDetailAction($request))->execute();
        } catch (Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
                'success' => false
            ], 400);
        }
        return $results;
    }

    public function showOnHomePage(Request $request)
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

}
