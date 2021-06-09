<?php

namespace App\Observers;

use App\Models\Password;
use App\Models\Post;
use Illuminate\Support\Str;

class PasswordObserver
{
    /**
     * Handle the user "creating" event.
     *
     * @param  \App\Models\Password  $password
     * @return void
     */
    public function creating(Password $password)
    {
        $password->uuid = Str::uuid();
    
    }

  
}
