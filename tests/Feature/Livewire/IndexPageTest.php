<?php

namespace Tests\Feature\Livewire;

use App\Domains\ApplicationManagement\Models\Category;
use App\Domains\ApplicationManagement\Models\Post;
use App\Http\Livewire\IndexPage;
use Livewire\Livewire;
use Tests\TestCase;

class IndexPageTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        Category::factory()->count(3)->create(['is_active'=>true]);
        $post=Post::factory()->create(['category_id'=>1]);
        $post->attachTag('show on home page','show_on_home_page');
        Post::factory()->count(5)->create(['category_id'=>1]);
        Post::factory()->count(5)->create(['category_id'=>2]);
        Post::factory()->count(5)->create(['category_id'=>3]);
        $component = Livewire::test(IndexPage::class);

        $component->assertStatus(200);
    }
}
