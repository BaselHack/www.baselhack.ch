<?php

namespace App\Nova\Modals;

use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Text;
use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;

class Newsletter extends Resource
{
    public static $group = 'Marketing';

    public static $model = '\App\Models\Newsletter';

    public static $title = 'email';

    public static $search = ['company', 'firstname', 'lastname', 'email'];

    public static function label()
    {
        return 'Newsletter';
    }

    public static function singularLabel()
    {
        return 'Newsletter';
    }

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
