<?php

namespace App\Nova\Filters;

use Illuminate\Http\Request;
use Laravel\Nova\Filters\Filter;

class PublishedFilter extends Filter
{
    public $name = 'Published';

    public function apply(Request $request, $query, $value)
    {
        return $query->where('published', $value);
    }

    public function options(Request $request)
    {
        return [
            'Published' => 1,
            'Unpublished' => 0,
        ];
    }
}
