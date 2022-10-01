<?php

namespace App\Domains\ApplicationManagement\Services;

use App\Domains\ApplicationManagement\Actions\GetAllPostAction;
use Exception;
use Illuminate\Http\Request;

class PostService
{
    public function index(Request $request)
    {
        try {
            $results = (new GetAllPostAction($request))->execute();
        } catch (Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
                'success' => false
            ], 400);
        }

        return $results;
    }
}
