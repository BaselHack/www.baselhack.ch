<?php

namespace App\Nova\Models;

use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Text;

class Section extends Resource
{
    public static $group = 'Content';

    public static $model = \App\Models\Section::class;

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
                ->readonly(),

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
