<?php

namespace Tests\Feature\Livewire;

use Tests\TestCase;
use Spatie\Tags\Tag;
use Livewire\Livewire;
use App\Http\Livewire\ShowPost;
use App\Domains\ApplicationManagement\Models\Post;

class ShowPostTest extends TestCase
{

    /** @test */
    public function post_creation_page_contains_livewire_component()
    {
        $post = Post::factory()->create();
        $tags =Tag::factory()->count(5)->create()->pluck('name')->toArray();
        $post->attachTags($tags);
        Livewire::test(ShowPost::class, ['post' => $post])
                ->assertStatus(200);
    }
}
