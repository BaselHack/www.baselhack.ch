<?php

namespace App\Observers;

use App\Models\User;
use Illuminate\Support\Str;

class UserObserver
{
    /**
     * Handle the user "creating" event.
     *
     * @return void
     */
    public function creating(User $user)
    {
        $user->uuid = Str::orderedUuid()->toString();
    }
}
