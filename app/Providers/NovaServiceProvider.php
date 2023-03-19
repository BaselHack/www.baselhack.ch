<?php

namespace App\Providers;

use App\Nova\Resources\ChannelResource;
use App\Nova\Resources\CompanyResource;
use App\Nova\Resources\NewsletterResource;
use App\Nova\Resources\PageResource;
use App\Nova\Resources\PasswordResource;
use App\Nova\Resources\PositionResource;
use App\Nova\Resources\SectionResource;
use App\Nova\Resources\UserResource;
use CodebarAg\LaravelDefaultNova\Providers\CustomNovaServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Menu\MenuGroup;
use Laravel\Nova\Menu\MenuItem;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;

class NovaServiceProvider extends CustomNovaServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Nova::mainMenu(function (Request $request) {
            return [

                MenuItem::externalLink(__('Website'), route('start.index'))->openInNewTab(),

                MenuSection::make(__('Administration'), [
                    MenuGroup::make(__('Access & Members'), [
                        MenuItem::resource(UserResource::class),
                    ])->collapsable(),
                    MenuGroup::make(__('Security'), [
                        MenuItem::resource(PasswordResource::class),
                    ])->collapsable(),
                ])->icon('users')->collapsable(),

                MenuSection::make(__('BaselHack'), [
                    MenuGroup::make(__('Marketing'), [
                        MenuItem::resource(ChannelResource::class),
                        MenuItem::resource(NewsletterResource::class),
                        MenuItem::resource(PageResource::class),
                    ])->collapsable(),

                    MenuGroup::make(__('Content'), [
                        MenuItem::resource(SectionResource::class),
                        MenuItem::resource(CompanyResource::class),
                    ])->collapsable(),

                    MenuGroup::make(__('Jobs'), [
                        MenuItem::resource(PositionResource::class),
                    ])->collapsable(),

                ])->icon('heart')->collapsable(),

            ];
        });
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
            ->withAuthenticationRoutes()
            ->withPasswordResetRoutes();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return Auth::guard('web')->check();
        });
    }

    /**
     * Get the cards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [

        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [

        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        parent::register();

        Nova::footer(function ($footer) {
            return Blade::render('&copy; '.date('Y').' '.config('app.name'));
        });
    }
}
