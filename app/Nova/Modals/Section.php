<?php

namespace App\Nova\Modals;

use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Text;

class Section extends Resource
{
    public static $group = 'Content';

    public static $model = '\App\Models\Section';

    public static $title = 'title';

    public static $search = ['title', 'teaser', 'body'];

    public static function label()
    {
        return 'Sections';
    }

    public static function singularLabel()
    {
        return 'Section';
    }

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
                ->sortable()
                ->rules('nullable', 'string', 'max:160'),

            Markdown::make('Body', 'body')
                ->sortable()
                ->rules('nullable', 'string', 'max:4500'),
        ];
    }
}
