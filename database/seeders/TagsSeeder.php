<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Spatie\Tags\Tag;
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

        Tag::updateOrCreate(['slug' => Str::slug('show on home page')], [
            'name' => ['en' => 'show on home page', 'ar' => 'show on home page'],
            'slug' => Str::slug('show on home page'),
        ]);
    }
}
