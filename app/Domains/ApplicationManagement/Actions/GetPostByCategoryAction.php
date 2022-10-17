<?php

namespace App\Domains\ApplicationManagement\Actions;

use Illuminate\Http\Request;
use App\Domains\Interfaces\Actionable;
use App\Domains\ApplicationManagement\Models\Post;

class GetPostByCategoryAction implements Actionable
{
    protected  $category_id;
    protected  $page;
    public function __construct($category_id, $page)
    {
        $this->category_id = $category_id;
        $this->page = $page;
    }

    public function execute()
    {
        return Post::ByCategory($this->category_id)->latest()->paginate(5, ['*'], 'page', $this->page);
    }
}
