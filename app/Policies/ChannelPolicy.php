<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Channel;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChannelPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return true ;
    }

    public function view(User $user, Channel $channel)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Channel $channel)
    {
        return true;
    }

    public function delete(User $user, Channel $channel)
    {
        return true;
    }

    public function restore(User $user, Channel $channel)
    {
        return false;
    }

    public function forceDelete(User $user, Channel $channel)
    {
        return false;
    }
}
