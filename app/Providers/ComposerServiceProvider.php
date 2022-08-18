<?php

namespace App\Providers;

use App\Enums\CompanyTypeEnum;
use App\Models\Channel;
use App\Models\Company;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $view->with([
                'channels' => Channel::published()->orderBy('name','asc')->get(),
                'mainSponsors' => Company::published()
                    ->whereIn('type', [CompanyTypeEnum::SPONSOR_MAIN()->value])
                    ->orderBy('name')->get(),
                'goldSponsors' => Company::published()
                    ->whereIn('type', [CompanyTypeEnum::SPONSOR_GOLD()->value])
                    ->orderBy('name')->get(),
                'silverSponsors' => Company::published()
                    ->whereIn('type', [CompanyTypeEnum::SPONSOR()->value])
                    ->orderBy('name')->get(),
                'locationSponsors' => Company::published()
                    ->whereIn('type', [CompanyTypeEnum::SPONSOR_LOCATION()->value])
                    ->orderBy('name')->get()
            ]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
