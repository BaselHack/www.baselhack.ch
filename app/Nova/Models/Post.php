<?php

namespace App\Nova\Models;

use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;

class Post extends Resource
{
    public static $group = 'Content';

    public static $model = \App\Models\Post::class;


    public static function label()
    {
        return 'Posts';
    }

    public static function singularLabel()
    {
        return 'Post';
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
            Date::make('Published at', 'published_at')
                ->sortable()
                ->filterable()
                ->rules('nullable', 'date')
                ->hideWhenCreating(),

            Text::make('Title', 'title')
                ->sortable()
                ->rules('required', 'string', 'max:254')
                ->creationRules('unique:posts,title')
                ->updateRules('unique:posts,title,{{resourceId}}'),

            Text::make('Teaser', 'teaser')
                ->rules('required', 'string', 'max:254')
                ->hideFromIndex(),

            Trix::make('Body', 'body')->withFiles('public')->alwaysShow(),

            BelongsTo::make('Author', 'author', User::class)
                ->nullable(),

        ];
    }
}
