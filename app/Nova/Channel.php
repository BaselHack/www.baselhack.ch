<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Text;

class Channel extends Resource
{
    public static $group = 'Content';

    public static $model = '\App\Models\Channel';

    public static $title = 'name';

    public static $search = ['name'];

    public static function label()
    {
        return 'Channels';
    }

    public static function singularLabel()
    {
        return 'Channel';
    }

    public static function softDeletes()
    {
        return false;
    }

    public function fields(Request $request)
    {
        return [

            Boolean::make('Published', 'published')
                ->hideWhenCreating(),

            Text::make('Name','name')
                ->sortable()
                ->rules('required', 'max:254'),

            Text::make('Icon','icon')
                ->sortable()
                ->hideFromIndex()
                ->rules('required', 'max:254'),

            Text::make('URL','url')
                ->sortable()
                ->hideFromIndex()
                ->rules('required','url','max:254'),
        ];
    }

}
