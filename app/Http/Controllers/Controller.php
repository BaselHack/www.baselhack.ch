<?php

namespace App\Http\Controllers;

use App\Enums\CompanyTypeEnum;
use App\Models\Company;
use App\Models\SponsorsCollection;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected SponsorsCollection $sponsors;

    public function __construct()
    {
        // load sponsors globally
        $this->sponsors = new SponsorsCollection();
        $this->loadSponsors();
    }

    /**
     * function to load sponsors globally so that we can show sponsors in the footer of all pages
     */
    private function loadSponsors()
    {
        $this->sponsors->mainSponsors = Company::published()
            ->whereIn('type', [CompanyTypeEnum::SPONSOR_MAIN()->value])
            ->orderBy('name')->get();

        $this->sponsors->goldSponsors = Company::published()
            ->whereIn('type', [CompanyTypeEnum::SPONSOR_GOLD()->value])
            ->orderBy('name')->get();

        $this->sponsors->silverSponsors = Company::published()
            ->whereIn('type', [CompanyTypeEnum::SPONSOR()->value])
            ->orderBy('name')->get();

        $this->sponsors->locationSponsors = Company::published()
            ->whereIn('type', [CompanyTypeEnum::SPONSOR_LOCATION()->value])
            ->orderBy('name')->get();
    }
}
