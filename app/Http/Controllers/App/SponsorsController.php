<?php

namespace App\Http\Controllers\App;

use App\Enums\CompanyTypeEnum;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Views\Models\ContentDTO;

class SponsorsController extends Controller
{
    public function index()
    {
        $content = ContentDTO::fromModel('sponsors:index');

        $mainSponsors = Company::published()
            ->whereIn('type', [CompanyTypeEnum::SPONSOR_MAIN()->value])
            ->orderBy('name')->get();

        $sponsors = Company::published()
            ->whereIn('type', [CompanyTypeEnum::SPONSOR()->value])
            ->orderBy('name')->get();

        return view('app.sponsors.index')->with([
            'page' => $content->page,
            'title' => $content->title,
            'teaser' => $content->teaser,
            'body' => $content->body,
            'mainSponsors' => $mainSponsors,
            'sponsors' => $sponsors,
        ]);
    }
}
