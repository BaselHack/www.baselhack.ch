<?php

namespace App\Observers;

use Illuminate\Support\Str;
use App\Models\Newsletter;

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
