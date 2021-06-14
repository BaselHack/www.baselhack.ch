<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Panel;

class Section extends Resource
{
    public static $group = 'Content';

    public static $model = '\App\Models\Section';

    public static $title = 'title';

    public static $search = ['title','body'];

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


    public function fields(Request $request)
    {
        return [

            Text::make('Key','key')
                ->sortable()
                ->rules('required', 'string','max:254','unique:sections,key'),

            Text::make('Title','title')
                ->sortable()
                ->rules('required','string','max:254'),

            Text::make('URL','url')
                ->hideFromIndex()
                ->rules('required', 'url','max:254'),


            new Panel('Image', $this->image()),
        ];

    }


    protected function image()
    {
        return [
            Image::make('Image', 'image')
                ->disk('public')
                ->path('companies')
                ->hideFromIndex()
                ->rules('dimensions:ratio=2/1')
                ->creationRules('nullable', 'image', 'max:254')
                ->updateRules('nullable', 'image', 'max:254'),
        ];
    }

}
