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
    public function the_component_can_render_with_full_data()
    {
        $category=Category::factory()->count(3)->create(['is_active'=>true]);
        $post=Post::factory()->create(['category_id'=>$category[0]->id]);
        $post->attachTag('show on home page','show_on_home_page');
        Post::factory()->count(5)->create(['category_id'=>$category[0]->id]);
        Post::factory()->count(5)->create(['category_id'=>$category[1]->id]);
        Post::factory()->count(5)->create(['category_id'=>$category[2]->id]);
        $component = Livewire::test(IndexPage::class);
        $component->assertStatus(200);
        
        $post->delete();
        $this->deletleCategoryAndPostIfExist($category);
    }

    /** @test */
    public function the_component_can_render_with_full_data_and_show_posts_by_category()
    {
        $category=Category::factory()->count(3)->create(['is_active'=>true]);
        Post::factory()->count(5)->create(['category_id'=>$category[0]->id]);
        Post::factory()->count(5)->create(['category_id'=>$category[1]->id]);
        Post::factory()->count(5)->create(['category_id'=>$category[2]->id]);
        $component = Livewire::test(IndexPage::class);
        $component->assertStatus(200);
        
        $this->deletleCategoryAndPostIfExist($category);
    }

    /** @test */
    public function the_component_can_render_with_post_have_show_on_home_page_tag()
    {
        $category=Category::factory()->create(['is_active'=>true]);
        $post=Post::factory()->create(['category_id'=>$category->id]);
        $post->attachTag('show on home page','show_on_home_page');
        $component = Livewire::test(IndexPage::class);
        $component->assertStatus(200);
        
        $post->delete();
        $category->delete();
    }


    public function deletleCategoryAndPostIfExist($category)
    {
        $category->each(function($item){
            foreach ($item->posts as $post) {
                $post->delete();
            }
            $item->delete();
        });
    }
}
