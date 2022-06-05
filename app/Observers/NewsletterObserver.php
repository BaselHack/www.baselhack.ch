<?php

namespace App\Observers;

use App\Models\Newsletter;
use Illuminate\Support\Str;

class NewsletterObserver
{
    /**
     * Handle the user "creating" event.
     *
     * @param  \App\Models\Newsletter  $newsletter
     * @return void
     */
    public function creating(Newsletter $newsletter)
    {
        $newsletter->uuid = Str::orderedUuid()->toString();
    }
}
