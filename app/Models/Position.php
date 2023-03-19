<?php

namespace App\Models;

use Carbon\Carbon;
use CodebarAg\LaravelDefault\Traits\HasUuid;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Position extends Model
{
    use HasFactory;
    use HasUuid;
    use SoftDeletes;

    protected $casts = [
        'published_at' => 'date',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function scopePublished(Builder $builder)
    {
        return $builder->whereNotNull('published_at')->whereDate('published_at', '<=', Carbon::now()->toDateString());
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
