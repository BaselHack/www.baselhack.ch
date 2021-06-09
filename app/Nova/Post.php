<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;

class Post extends Resource
{
    public static $group = 'Content';

    public static $model = '\App\Models\Post';

    public static $title = 'title';

    public static $search = ['title', 'teaser', 'body'];

    public static function label()
    {
        return 'Posts';
    }

    public static function singularLabel()
    {
        return 'Post';
    }

    public static function softDeletes()
    {
        return false;
    }

    public function fields(Request $request)
    {
        return [
            Date::make('Published at', 'published_at')
                ->sortable()
                ->rules('nullable', 'date')
                ->hideWhenCreating(),

            Text:: make('Title', 'title')
                ->sortable()
                ->rules('required', 'string', 'max:254')
                ->creationRules('unique:posts,title')
                ->updateRules('unique:posts,title,{{resourceId}}'),

            Text:: make('Teaser', 'teaser')
                ->rules('required', 'string', 'max:254')
                ->hideFromIndex(),

            Trix::make('Body', 'body')->withFiles('public')->alwaysShow(),

            BelongsTo::make('Author', 'author', 'App\Nova\User')
                ->nullable()

        ];
    }
}