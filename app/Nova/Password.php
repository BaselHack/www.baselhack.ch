<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Text;

class Password extends Resource
{
    public static $group = 'Administration';

    public static $model = '\App\Models\Password';

    public static $title = 'name';

    public static $search = ['name'];

    public static function label()
    {
        return 'Passwords';
    }

    public static function singularLabel()
    {
        return 'Password';
    }

    public static function softDeletes()
    {
        return false;
    }

    public function fields(Request $request)
    {
        return [

            Text::make('Name','name')
                ->sortable()
                ->rules('required', 'max:254'),

            Text::make('Username','username')
                ->sortable()
                ->rules('required', 'max:254'),

            Text::make('Password','password')
                ->sortable()
                ->hideFromIndex()
                ->rules('required', 'max:254'),

            Text::make('URL','url')
                ->sortable()
                ->hideFromIndex()
                ->rules('nullable','url','max:254'),
        ];
    }

}
