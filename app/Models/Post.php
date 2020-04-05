<?php

namespace App\Models;

use App\Scopes\OrderNumberScope;
use App\Traits\OrderNumberTrait;
use App\Traits\ThumbnailTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Tags\HasTags;

class Post extends Model
{
    use SoftDeletes, OrderNumberTrait, ThumbnailTrait, HasTags, Sluggable;

    /**
     * @var array
     */
    protected $fillable = [
        'title', 'short_description', 'description', 'image', 'order_number', 'posted_at', 'slug',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at', 'posted_at'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new OrderNumberScope);
    }

    /**
     * Опубликованные записи
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopePosted(Builder $query): Builder
    {
        return $query->where('posted_at', '<=', now());
    }
}
