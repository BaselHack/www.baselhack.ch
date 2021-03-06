<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;

class Position extends Resource
{
    public static $group = 'Content';

    public static $model = '\App\Models\Position';

    public static $title = 'title';

    public static $search = ['title'];

    public static function label()
    {
        return 'Positions';
    }

    public static function singularLabel()
    {
        return 'Position';
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

            BelongsTo::make('Company'),

            Text::make('Title','title')
                ->sortable()
                ->rules('required', 'max:254'),

            Trix::make('Body','body')->alwaysShow()
                ->alwaysShow()
                ->rules('required','max:4096'),

            Text::make('Url','url')
                ->hideFromIndex()
                ->rules('required','string','url','max:254'),

        ];
    }

}
