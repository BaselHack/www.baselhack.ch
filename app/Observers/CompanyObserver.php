<?php

namespace App\Observers;

use App\Models\Company;
use Illuminate\Support\Str;

class CompanyObserver
{
    /**
     * Handle the user "creating" event.
     *
     * @param  \App\Models\Company  $company
     * @return void
     */
    public function creating(Company $company)
    {
        $company->uuid = Str::uuid();
    }

  
}
