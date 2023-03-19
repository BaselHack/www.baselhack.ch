<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait IsPublishable
{
    public function scopePublished(Builder $builder)
    {
        return $builder->where('published', true);
    }
}
