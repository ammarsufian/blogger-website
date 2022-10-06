<?php

namespace App\Domains\ApplicationManagement\Models;

use Spatie\Tags\HasTags;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\File;
use Database\Factories\PostFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Post extends Model
{
    use HasFactory, HasTranslations, HasTags, InteractsWithMedia;

    /**
     * The attributes that are translatable.
     *
     * @var array<string>
     */
    public array $translatable = ['title', 'content'];

    /**
     * The attributes that are appendable to the model.
     *
     * @var array<string>
     */
    protected $appends = ['image','tags'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $guarded = [];

    /**
     * new Factory Instance for the Model.
     */
    protected static function newFactory(): PostFactory
    {
        return PostFactory::new();
    }

    /**
     * Get the category that owns the post.
     */
    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the tags that owns the post.
     */
    public function tags(): MorphToMany
    {
        return $this
            ->morphToMany(self::getTagClassName(), 'taggable', 'taggables', null, 'tag_id')
            ->orderBy('order_column');
    }

    /**
     * Set the image attribute.
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('logo')
            ->acceptsFile(function (File $file) {
                return in_array($file->mimeType, [
                    'image/jpg',
                    'image/jpeg',
                    'image/png',
                ]);
            })->singleFile();
    }

    /**
     * Get the image attribute.
     */
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->getFirstMediaUrl('posts'),
        );
    }

}
