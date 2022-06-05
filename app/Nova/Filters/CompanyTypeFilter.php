<?php

namespace App\Nova\Filters;

use App\Enums\CompanyTypeEnum;
use Illuminate\Http\Request;
use Laravel\Nova\Filters\Filter;

class CompanyTypeFilter extends Filter
{
    public $name = 'Type';

    public function apply(Request $request, $query, $value)
    {
        return $query->where('type', $value);
    }

    public function options(Request $request)
    {
        return array_flip(CompanyTypeEnum::toArray());
    }
}
