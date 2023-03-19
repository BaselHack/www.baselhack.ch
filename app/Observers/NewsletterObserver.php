<?php

namespace App\Observers;

use App\Models\Newsletter;
use Illuminate\Support\Str;

class NewsletterObserver
{
    /**
     * Handle the user "creating" event.
     *
     * @return void
     */
    public function creating(Newsletter $newsletter)
    {
        $newsletter->uuid = Str::orderedUuid()->toString();
    }
}
