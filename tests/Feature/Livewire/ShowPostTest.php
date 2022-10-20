<?php

namespace Tests\Feature\Livewire;

use App\Domains\ApplicationManagement\Models\Category;
use Tests\TestCase;
use Spatie\Tags\Tag;
use Livewire\Livewire;
use App\Http\Livewire\ShowPost;
use App\Domains\ApplicationManagement\Models\Post;

class ShowPostTest extends TestCase
{

    /** @test */
    public function it_should_display_post_details_by_id_in_page()
    {
        $category=Category::factory()->create(['is_active' => true]);
        $post = Post::factory()->create(['category_id' => $category->id]);
        $tags =Tag::factory()->count(5)->create()->pluck('name')->toArray();
        $post->attachTags($tags);
        Livewire::test(ShowPost::class, ['post' => $post])
                ->assertStatus(200);
        $post->delete();
        $category->delete();
    }

    /** @test */
    public function it_cannt_display_post_details_if_not_fond_post()
    {
        $this->get(app()->getLocale().'/post/9999')
            ->assertStatus(404);
    }
}
