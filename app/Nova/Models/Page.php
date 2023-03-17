<?php

namespace App\Nova\Models;

use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;

class Page extends Resource
{
    public static $group = 'Marketing';

    public static $model = \App\Models\Page::class;

    public static function label()
    {
        return 'Pages';
    }

    public static function singularLabel()
    {
        return 'Page';
    }

    public function title()
    {
        return "$this->index";
    }

    public function subtitle()
    {
        return "$this->title";
    }

    public static $displayInNavigation = true;
    public static $perPageOptions = [50, 100, 250];
    public static $perPageViaRelationship = 25;
    public static $globallySearchable = true;
    public static $search = ['index', 'title'];
    public static $searchRelations = [];


    public static function softDeletes()
    {
        return false;
    }

    public function fields(NovaRequest $request)
    {
        return [

            Text::make('Index', 'index')
                ->sortable()
                ->rules('required', 'string', 'max:254')
                ->creationRules('unique:pages,index')
                ->updateRules('unique:pages,index,{{resourceId}}'),

            Text::make('Robots', 'robots')
                ->sortable()
                ->rules('nullable', 'string', 'max:100'),

            Text::make('Title', 'title')
                ->sortable()
                ->rules('required', 'string', 'max:100'),

            Textarea::make('Description', 'description')
                ->alwaysShow()
                ->rules('required', 'max:200'),

        ];
    }
}
