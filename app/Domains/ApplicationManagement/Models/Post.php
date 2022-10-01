<?php

namespace App\Domains\ApplicationManagement\Models;

use Spatie\Tags\HasTags;
use Database\Factories\PostFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, HasTranslations,HasTags;

    /**
     * The attributes that are translatable.
     *
     * @var array<string>
     */
    public array $translatable = ['title', 'content'];

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
}
