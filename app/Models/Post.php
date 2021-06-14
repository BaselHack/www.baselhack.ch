<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class Post extends Model
{
    use HasFactory, LogsActivity, SoftDeletes;

    protected $guraded = [''];
    protected static $logAttributes = ['published_at', 'title', 'slug', 'teaser', 'body'];

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
}
