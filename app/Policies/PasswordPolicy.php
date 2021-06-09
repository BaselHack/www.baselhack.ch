<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Password;
use Illuminate\Auth\Access\HandlesAuthorization;

class PasswordPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return true ;
    }

    public function view(User $user, Password $password)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Password $password)
    {
        return true;
    }

    public function delete(User $user, Password $password)
    {
        return true;
    }

    public function restore(User $user, Password $password)
    {
        return false;
    }

    public function forceDelete(User $user, Password $password)
    {
        return false;
    }
}
