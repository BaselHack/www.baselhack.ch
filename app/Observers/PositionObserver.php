<?php

namespace App\Observers;

use App\Models\Position;
use Illuminate\Support\Str;

class PositionObserver
{
    /**
     * Handle the user "creating" event.
     *
     * @param  \App\Models\Position  $position
     * @return void
     */
    public function creating(Position $position)
    {
        $position->uuid = Str::orderedUuid()->toString();
    }
}
