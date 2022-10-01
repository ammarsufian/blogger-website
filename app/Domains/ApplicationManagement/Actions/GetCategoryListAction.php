<?php

namespace App\Domains\ApplicationManagement\Actions;

use Illuminate\Http\Request;
use App\Domains\Interfaces\Actionable;
use App\Domains\ApplicationManagement\Models\Category;

class GetCategoryListAction implements Actionable
{
    protected Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function execute()
    {
        return Category::query()->OfActive()->get();
    }
}
