<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;

class Page extends Resource
{
    public static $group = 'SEO';

    public static $model = '\App\Models\Page';

    public static $title = 'index';

    public static $search = ['index','title'];

    public static function label()
    {
        return 'Pages';
    }

    public static function singularLabel()
    {
        return 'Page';
    }

    public static function softDeletes()
    {
        return false;
    }

    public function fields(Request $request)
    {
        return [

            Text::make('Index','index')
                ->sortable()
                ->rules('required', 'max:254')
                ->creationRules('unique:pages,index')
                ->updateRules('unique:pages,index,{{resourceId}}'),

            Text::make('Title','title')
                ->sortable()
                ->rules('required', 'max:254'),

            Textarea::make('Description','description')->alwaysShow()
                ->rules('required', 'max:254'),

        ];
    }

}
