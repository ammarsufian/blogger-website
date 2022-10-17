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
    
    public function scopeShowOnHomePage(Builder $query)
    {
        return $query->withAllTags(['show on home page'],'show_on_home_page')
                ->latest()->first();
    }

    
    public function scopeByCategory(Builder $query, $category_id)
    {
        return $query->whereHas('category', function ($query) use ($category_id) {
            $query->where('id', $category_id);
        });
    }
}
