<?php

namespace App\Nova\Resources;

use App\Models\Challenge;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class ChallengeResource extends Resource
{
    public static $model = Challenge::class;

    public static function label()
    {
        return 'Challenge';
    }

    public static function singularLabel()
    {
        return 'Challenge';
    }

    public function title()
    {
        return "$this->name";
    }

    public function subtitle()
    {
        return parent::subtitle();
    }

    public static $displayInNavigation = true;

    public static $perPageOptions = [50, 100, 250];

    public static $perPageViaRelationship = 25;

    public static $globallySearchable = true;

    public static $search = ['title'];

    public static $searchRelations = [];

    public static function softDeletes()
    {
        return false;
    }

    public function fields(NovaRequest $request)
    {
        return [

            Text::make('Title', 'title')
                ->sortable()
                ->rules('required', 'max:254'),

            Text::make('Subtitle', 'subtitle'),

            Trix::make('Description', 'description')->alwaysShow()
                ->alwaysShow()
                ->rules('required', 'max:4096'),

            BelongsTo::make('Company', 'company', CompanyResource::class),

            Boolean::make('Published', 'published')
                ->filterable()
                ->sortable(),

            Text::make('Slug', 'slug')
                ->hideFromIndex()
                ->rules('required', 'string', 'max:254'),
        ];
    }
}
