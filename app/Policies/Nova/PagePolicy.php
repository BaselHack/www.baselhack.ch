<?php

namespace App\Policies\Nova;

use App\Models\Page;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PagePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Page $page)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Page $page)
    {
        return true;
    }

    public function delete(User $user, Page $page)
    {
        return false;
    }

    public function restore(User $user, Page $page)
    {
        return false;
    }

    public function forceDelete(User $user, Page $page)
    {
        return false;
    }
}
