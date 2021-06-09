<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;

class LastAuthenticated
{
    public function handle(Login $event)
    {
        activity()
            ->causedBy($event->user)
            ->log('authenticated');
    }
}
