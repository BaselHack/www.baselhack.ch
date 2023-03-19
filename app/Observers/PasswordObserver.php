<?php

namespace App\Observers;

use App\Models\Password;
use Illuminate\Support\Str;

class PasswordObserver
{
    /**
     * Handle the user "creating" event.
     *
     * @return void
     */
    public function creating(Password $password)
    {
        $password->uuid = Str::orderedUuid()->toString();
    }
}
