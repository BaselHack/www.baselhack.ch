<?php

namespace App\Observers;

use App\Models\Channel;
use Illuminate\Support\Str;

class ChannelObserver
{
    /**
     * Handle the user "creating" event.
     *
     * @param  \App\Models\Channel  $channel
     * @return void
     */
    public function creating(Channel $channel)
    {
        $channel->uuid = Str::orderedUuid();
    }
}
