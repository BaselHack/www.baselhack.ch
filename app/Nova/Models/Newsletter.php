<?php

namespace App\Nova\Models;

use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Text;
use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;

class Newsletter extends Resource
{
    public static $group = 'Marketing';

    public static $model = \App\Models\Newsletter::class;

    public static function label()
    {
        return 'Newsletter';
    }

    public static function singularLabel()
    {
        return 'Newsletter';
    }

    public function title()
    {
        return "$this->email";
    }

    public function subtitle()
    {
        return parent::subtitle();
    }

    public static $displayInNavigation = true;
    public static $perPageOptions = [50, 100, 250];
    public static $perPageViaRelationship = 25;
    public static $globallySearchable = true;
    public static $search = ['company', 'firstname', 'lastname', 'email'];
    public static $searchRelations = [];


    public static function softDeletes()
    {
        return false;
    }

    public function fields(NovaRequest $request)
    {
        return [

            Text::make('Company', 'company')
                ->sortable()
                ->readonly(),

            Text::make('Firstname', 'firstname')
                ->sortable()
                ->readonly(),

            Text::make('Lastname', 'lastname')
                ->sortable()
                ->readonly(),

            Text::make('E-Mail', 'email')
                ->sortable()
                ->readonly(),

            DateTime::make('Created at', 'created_at')
                ->sortable()
                ->readonly(),

        ];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [
            (new DownloadExcel)->withHeadings(),
        ];
    }
}
