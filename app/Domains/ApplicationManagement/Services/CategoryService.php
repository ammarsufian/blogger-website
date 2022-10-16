<?php

namespace App\Domains\ApplicationManagement\Services;

use App\Domains\ApplicationManagement\Actions\GetCategoryListAction;
use Exception;
use Illuminate\Http\Request;

class CategoryService
{
    public function index(Request $request)
    {
        try {
            $results = (new GetCategoryListAction($request))->execute();
        } catch (Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
                'success' => false
            ], 400);
        }

        return $results;
    }
}
