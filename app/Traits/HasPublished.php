<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait HasPublished
{
    public function scopePublished(Builder $builder)
    {
        return $builder->where('published',true);
    }
}
