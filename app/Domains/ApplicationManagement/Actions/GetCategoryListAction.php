<?php

namespace App\Domains\ApplicationManagement\Actions;

use App\Domains\Interfaces\Actionable;
use App\Domains\ApplicationManagement\Models\Category;

class GetCategoryListAction implements Actionable
{

    public function execute()
    {
        return Category::query()->OfActive()->get();
    }
}
