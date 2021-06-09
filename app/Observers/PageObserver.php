<?php

namespace App\Observers;

use Illuminate\Support\Str;
use App\Models\Page;

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
        $page->uuid = Str::uuid();
    }

  
}
