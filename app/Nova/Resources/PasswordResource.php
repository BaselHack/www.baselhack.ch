<?php

namespace App\Nova\Resources;

use App\Models\Password;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class PasswordResource extends Resource
{
    public static $model = Password::class;

    public static function label()
    {
        return 'Passwords';
    }

    public static function singularLabel()
    {
        return 'Password';
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

    public static $search = ['name', 'username'];

    public static $searchRelations = [];

    public static function softDeletes()
    {
        return false;
    }

    public function fields(NovaRequest $request)
    {
        return [

            Text::make('Name', 'name')
                ->sortable()
                ->rules('required', 'max:254'),

            Text::make('Username', 'username')
                ->sortable()
                ->rules('required', 'max:254'),

            Text::make('PasswordResource', 'password')
                ->sortable()
                ->hideFromIndex()
                ->rules('required', 'max:254'),

            Text::make('URL', 'url')
                ->sortable()
                ->hideFromIndex()
                ->rules('nullable', 'url', 'max:254'),
        ];
    }
}
