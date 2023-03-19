<?php

namespace App\Nova\Resources;

use App\Enums\CompanyTypeEnum;
use App\Models\Company;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;
use Spatie\Enum\Laravel\Rules\EnumRule;

class CompanyResource extends Resource
{
    public static $model = Company::class;

    public static function label()
    {
        return 'Companies';
    }

    public static function singularLabel()
    {
        return 'Company';
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
