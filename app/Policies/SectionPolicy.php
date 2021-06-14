<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Section;
use Illuminate\Auth\Access\HandlesAuthorization;

class SectionPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return true ;
    }

    public function view(User $user, Section $section)
    {
        return true;
    }

    public function create(User $user)
    {
        return false;
    }

    public function update(User $user, Section $section)
    {
        return true;
    }

    public function delete(User $user, Section $section)
    {
        return false;
    }

    public function restore(User $user, Section $section)
    {
        return false;
    }

    public function forceDelete(User $user, Section $section)
    {
        return false;
    }
}
