<?php

namespace App\Nova\Models;

use App\Enums\CompanyTypeEnum;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Panel;
use Spatie\Enum\Laravel\Rules\EnumRule;

class Company extends Resource
{
    public static $group = 'Content';

    public static $model = '\App\Models\Company';

    public static $title = 'name';

    public static $search = ['name'];

    public static function label()
    {
        return 'Companies';
    }

    public static function singularLabel()
    {
        return 'Company';
    }

    public static function softDeletes()
    {
        return true;
    }

    public static function indexQuery(NovaRequest $request, $query)
    {
        return parent::indexQuery($request, $query->orderBy('name', 'asc'));
    }

    public function fields(NovaRequest $request)
    {
        return [

            Boolean::make('Published', 'published')
                ->sortable()
                ->filterable()
                ->hideWhenCreating(),

            Select::make('Type', 'type')
                ->options(CompanyTypeEnum::toArray())
                ->sortable()
                ->filterable()
                ->rules('required', 'string', 'max:254', new EnumRule(CompanyTypeEnum::class)),

            Text::make('Name', 'name')
                ->sortable()
                ->rules('required', 'max:254'),

            Text::make('URL', 'url')
                ->hideFromIndex()
                ->rules('required', 'url', 'max:254'),

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
