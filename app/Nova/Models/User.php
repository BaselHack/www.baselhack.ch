<?php

namespace App\Nova\Models;

use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Panel;

class User extends Resource
{
    public static $group = 'Administration';

    public static $model = \App\Models\User::class;

    public static function label()
    {
        return 'Users';
    }

    public static function singularLabel()
    {
        return 'User';
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
    public static $search = ['name', 'email'];
    public static $searchRelations = [];

    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),

            Gravatar::make()->maxWidth(50),

            Text::make('Name')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Email')
                ->sortable()
                ->rules('required', 'email', 'max:254')
                ->creationRules('unique:users,email')
                ->updateRules('unique:users,email,{{resourceId}}'),

            Password::make('Password')
                ->onlyOnForms()
                ->creationRules('required', 'string', 'min:8')
                ->updateRules('nullable', 'string', 'min:8'),

            new Panel('Profile', $this->profile()),
        ];
    }

    protected function profile()
    {
        return [

            Boolean::make('Profile Published', 'profile_published')
                ->sortable()
                ->filterable()
                ->rules('required', 'boolean'),

            Text::make('Gravatar', 'profile_gravatar')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'email', 'max:254'),

            Text::make('Website', 'profile_website')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'url', 'max:254'),

            Text::make('Github', 'profile_github')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'url', 'max:254'),

            Text::make('Twitter', 'profile_twitter')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'url', 'max:254'),

            Text::make('LinkedIn', 'profile_linkedin')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'url', 'max:254'),

        ];
    }
}