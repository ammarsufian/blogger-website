<?php

namespace Database\Seeders;

use App\Domains\ApplicationManagement\Models\Post;
use Spatie\Tags\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $tag=Tag::findOrCreate('show on home page', 'show_on_home_page');
        $tag->setTranslation('name', 'en', 'show on home page');
        $tag->save();

    }
}
