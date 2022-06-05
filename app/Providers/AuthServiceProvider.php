<?php

namespace App\Providers;

use App\Models\Channel;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Page;
use App\Models\Password;
use App\Models\Post;
use App\Models\User;
use App\Policies\ChannelPolicy;
use App\Policies\CompanyPolicy;
use App\Policies\ContactPolicy;
use App\Policies\EventPolicy;
use App\Policies\PagePolicy;
use App\Policies\PasswordPolicy;
use App\Policies\PostPolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Channel::class => ChannelPolicy::class,
        Company::class => CompanyPolicy::class,
        Contact::class => ContactPolicy::class,
        Event::class => EventPolicy::class,
        Page::class => PagePolicy::class,
        Password::class => PasswordPolicy::class,
        Post::class => PostPolicy::class,
        User::class => UserPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
