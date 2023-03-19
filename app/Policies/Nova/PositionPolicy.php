<?php

namespace App\Policies\Nova;

use App\Models\Position;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PositionPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Position $Position)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Position $Position)
    {
        return true;
    }

    public function delete(User $user, Position $Position)
    {
        return true;
    }

    public function restore(User $user, Position $Position)
    {
        return false;
    }

    public function forceDelete(User $user, Position $Position)
    {
        return false;
    }
}
