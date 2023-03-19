<?php

namespace App\Nova\Resources;

use App\Models\Section;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class SectionResource extends Resource
{
    public static $model = Section::class;

    public static function label()
    {
        return 'Sections';
    }

    public static function singularLabel()
    {
        return 'Section';
    }

    public function title()
    {
        return "$this->title";
    }

    public function subtitle()
    {
        return parent::subtitle();
    }

    public static $displayInNavigation = true;

    public static $perPageOptions = [50, 100, 250];

    public static $perPageViaRelationship = 25;

    public static $globallySearchable = true;

    public static $search = ['title', 'teaser', 'body'];

    public static $searchRelations = [];

    public static function softDeletes()
    {
        return false;
    }

    public function fields(NovaRequest $request)
    {
        return [

            Text::make('Key', 'key')
                ->sortable()
                ->rules('required', 'string', 'max:100'),

            Text::make('Title', 'title')
                ->sortable()
                ->rules('required', 'string', 'max:100'),

            Text::make('Teaser', 'teaser')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:160'),

            Markdown::make('Body', 'body')
                ->sortable()
                ->rules('nullable', 'string', 'max:4500'),
        ];
    }
}
