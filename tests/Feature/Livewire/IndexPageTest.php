<?php

namespace Tests\Feature\Livewire;

use App\Domains\ApplicationManagement\Models\Post;
use App\Http\Livewire\IndexPage;
use Livewire\Livewire;
use Tests\TestCase;

class IndexPageTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $post=Post::factory()->create();
        $post->attachTag('show on home page','show_on_home_page');
        $component = Livewire::test(IndexPage::class);

        $component->assertStatus(200);
    }
}
