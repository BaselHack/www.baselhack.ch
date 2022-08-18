<?php

namespace App\Http\Controllers\App;

use App\Enums\CompanyTypeEnum;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Page;
use App\Models\Section;
use Illuminate\Support\Str;

class SponsorsController extends Controller
{
    public function index()
    {
        $page = Page::whereIndex('sponsors:index')->first();

        $section = Section::where('key', 'sponsors')->first();

        $mainSponsors = Company::published()
            ->whereIn('type', [CompanyTypeEnum::SPONSOR_MAIN()->value])
            ->orderBy('name')->get();

        $goldSponsors = Company::published()
            ->whereIn('type', [CompanyTypeEnum::SPONSOR_GOLD()->value])
            ->orderBy('name')->get();

        $sponsors = Company::published()
            ->whereIn('type', [CompanyTypeEnum::SPONSOR()->value])
            ->orderBy('name')->get();

        $locationSponsors = Company::published()
            ->whereIn('type', [CompanyTypeEnum::SPONSOR_LOCATION()->value])
            ->orderBy('name')->get();

        return view('app.sponsors.index')->with([
            'page' => $page,
            'title' => $section->title,
            'teaser' => $section->teaser,
            'body' => Str::of($section->body)->markdown(),
            'mainSponsors' => $mainSponsors,
            'goldSponsors' => $goldSponsors,
            'sponsors' => $sponsors,
            'locationSponsors' => $locationSponsors
        ]);

    }
}
