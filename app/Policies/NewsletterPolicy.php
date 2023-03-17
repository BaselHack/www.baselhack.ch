<?php

namespace App\Policies;

use App\Models\Newsletter;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NewsletterPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Newsletter $newsletter)
    {
        return true;
    }

    public function create(User $user)
    {
        return false;
    }

    public function update(User $user, Newsletter $newsletter)
    {
        return false;
    }

    public function delete(User $user, Newsletter $newsletter)
    {
        return false;
    }

    public function restore(User $user, Newsletter $newsletter)
    {
        return false;
    }

    public function forceDelete(User $user, Newsletter $newsletter)
    {
        return false;
    }
}
