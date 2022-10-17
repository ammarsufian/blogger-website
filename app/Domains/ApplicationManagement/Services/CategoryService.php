<?php

namespace App\Domains\ApplicationManagement\Services;

use App\Domains\ApplicationManagement\Actions\GetCategoryListAction;
use Exception;

class CategoryService
{
    public function index()
    {
        try {
            $results = (new GetCategoryListAction())->execute();
        } catch (Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
                'success' => false
            ], 400);
        }

        return $results;
    }
}
