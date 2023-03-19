<?php

namespace App\Observers;

use App\Models\Position;
use Illuminate\Support\Str;

class PositionObserver
{
    /**
     * Handle the user "creating" event.
     *
     * @return void
     */
    public function creating(Position $position)
    {
        $position->uuid = Str::orderedUuid()->toString();
    }
}
