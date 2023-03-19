<?php

namespace App\Policies\Nova;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProfilePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Profile $Profile)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Profile $Profile)
    {
        return true;
    }

    public function delete(User $user, Profile $Profile)
    {
        return true;
    }

    public function restore(User $user, Profile $Profile)
    {
        return false;
    }

    public function forceDelete(User $user, Profile $Profile)
    {
        return false;
    }
}
