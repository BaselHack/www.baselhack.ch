<?php

namespace App\Models;

use Carbon\Carbon;
use CodebarAg\LaravelDefault\Traits\HasUuid;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;

class Post extends Model implements Sitemapable
{
    use HasFactory;
    use HasUuid;
    use SoftDeletes;

    protected $casts = [
        'published_at' => 'date',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function scopePublished(Builder $builder)
    {
        return $builder->whereNotNull('published_at')->whereDate('published_at', '<=', Carbon::now()->toDateString());
    }

    public function toSitemapTag(): Url|string|array
    {
        return route('posts.show', $this);
    }

    public function isPublished()
    {
        if (! $this->published_at) {
            return false;
        }

        if ($this->published_at?->toDateString() >= now()->toDateString()) {
            return false;
        }

        return true;
    }
}
