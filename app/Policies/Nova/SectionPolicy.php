<?php

namespace App\Policies\Nova;

use App\Models\Section;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SectionPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Section $section)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
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