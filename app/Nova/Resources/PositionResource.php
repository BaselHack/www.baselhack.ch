<?php

namespace App\Nova\Resources;

use App\Models\Position;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class PositionResource extends Resource
{
    public static $model = Position::class;

    public static function label()
    {
        return 'Positions';
    }

    public static function singularLabel()
    {
        return 'Position';
    }

    public function title()
    {
        return "$this->title";
    }

    public static $displayInNavigation = true;

    public static $perPageOptions = [50, 100, 250];

    public static $perPageViaRelationship = 25;

    public static $globallySearchable = true;

    public static $search = ['title', 'body'];

    public static $searchRelations = [];

    public static function softDeletes()
    {
        return false;
    }

    public function fields(NovaRequest $request)
    {
        return [

            Date::make('Published at', 'published_at')
                ->sortable()
                ->filterable()
                ->rules('nullable', 'date')
                ->hideWhenCreating(),

            BelongsTo::make('Company', 'company', CompanyResource::class)
                ->required()
                ->sortable()
                ->filterable(),

            Text::make('Title', 'title')
                ->sortable()
                ->rules('required', 'max:254'),

            Trix::make('Body', 'body')->alwaysShow()
                ->alwaysShow()
                ->rules('required', 'max:4096'),

            Text::make('Url', 'url')
                ->hideFromIndex()
                ->rules('required', 'string', 'url', 'max:254'),

        ];
    }
}
