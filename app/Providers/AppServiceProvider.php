<?php

namespace App\Providers;

use App\Models\Channel;
use App\Models\Company;
use App\Models\Newsletter;
use App\Models\Page;
use App\Models\Password;
use App\Models\Position;
use App\Models\Post;
use App\Models\User;
use App\Observers\ChannelObserver;
use App\Observers\CompanyObserver;
use App\Observers\NewsletterObserver;
use App\Observers\PageObserver;
use App\Observers\PasswordObserver;
use App\Observers\PositionObserver;
use App\Observers\PostObserver;
use App\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Channel::observe(ChannelObserver::class);
        Company::observe(CompanyObserver::class);
        Newsletter::observe(NewsletterObserver::class);
        Page::observe(PageObserver::class);
        Password::observe(PasswordObserver::class);
        Position::observe(PositionObserver::class);
        Post::observe(PostObserver::class);
        User::observe(UserObserver::class);

    }
}
