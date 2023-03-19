<?php

namespace App\Nova\Resources;

use App\Models\Channel;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class ChannelResource extends Resource
{
    public static $model = Channel::class;

    public static function label()
    {
        return 'Channels';
    }

    public static function singularLabel()
    {
        return 'Channel';
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

    public static $search = ['name'];

    public static $searchRelations = [];

    public static function softDeletes()
    {
        return false;
    }

    public function fields(NovaRequest $request)
    {
        return [

            Boolean::make('Published', 'published')
                ->filterable()
                ->sortable()
                ->hideWhenCreating(),

            Text::make('Name', 'name')
                ->sortable()
                ->rules('required', 'max:254'),

            Text::make('Icon', 'icon')
                ->sortable()
                ->hideFromIndex()
                ->rules('required', 'max:254'),

            Text::make('URL', 'url')
                ->sortable()
                ->hideFromIndex()
                ->rules('required', 'url', 'max:254'),
        ];
    }
}