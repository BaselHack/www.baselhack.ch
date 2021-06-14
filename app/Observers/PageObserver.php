<?php

namespace App\Observers;

use App\Models\Channel;
use App\Models\Page;
use Illuminate\Support\Str;

class PageObserver
{
    /**
     * Handle the user "creating" event.
     *
     * @param  \App\Models\Page  $page
     * @return void
     */
    public function creating(Page $page)
    {
        $page->uuid = Str::orderedUuid()->toString();
    }


}
