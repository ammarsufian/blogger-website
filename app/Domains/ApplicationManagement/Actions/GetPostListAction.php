<?php

namespace App\Domains\ApplicationManagement\Actions;

use App\Domains\Interfaces\Actionable;
use App\Domains\ApplicationManagement\Models\Post;

class GetPostListAction implements Actionable
{
    protected  $page;
    public function __construct($page)
    {
        $this->page = $page;
    }

    public function execute()
    {
        return Post::latest()->paginate(5, ['*'], 'page', $this->page);
    }
}
