<?php

namespace App\Domains\ApplicationManagement\Models;

use Spatie\Tags\HasTags;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\File;
use Database\Factories\PostFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model implements HasMedia
{
    use HasFactory, HasTranslations, HasTags, InteractsWithMedia;

    const SHOW_ON_HOMEPAGE = ["show on home page"];
    const TYPE_SHOW_ON_HOMEPAGE = "show_on_home_page";
    public array $translatable = ['title', 'content'];


    protected $appends = ['image'];


    protected $guarded = [];


    protected static function newFactory(): PostFactory
    {
        return PostFactory::new();
    }


    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


    public function tags(): MorphToMany
    {
        return $this
            ->morphToMany(self::getTagClassName(), 'taggable', 'taggables', null, 'tag_id')
            ->orderBy('order_column');
    }


    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('image')
            ->acceptsFile(function (File $file) {
                return in_array($file->mimeType, [
                    'image/jpg',
                    'image/jpeg',
                    'image/png',
                ]);
            })->singleFile();
    }


    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->getFirstMediaUrl('posts'),
        );
    }
    
    public function scopeShowByTags(Builder $query, array $tags, string $type)
    {
        return $query->withAllTags($tags,$type)
                ->latest()->first();
    }

    
    public function scopeByCategoryId(Builder $query, $category_id)
    {
        return $query->whereHas('category', function ($query) use ($category_id) {
            $query->where('id', $category_id);
        })->with('category');
    }
}
