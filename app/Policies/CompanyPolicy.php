<?php

namespace App\Policies;

use App\Models\Company;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompanyPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return true ;
    }

    public function view(User $user, Company $company)
    {
        return true ;
    }

    public function create(User $user)
    {
        return true ;
    }

    public function update(User $user, Company $company)
    {
        return true ;
    }

    public function delete(User $user, Company $company)
    {
        return true ;
    }

    public function restore(User $user, Company $company)
    {
        return false;
    }

    public function forceDelete(User $user, Company $company)
    {
        return false;
    }
}
