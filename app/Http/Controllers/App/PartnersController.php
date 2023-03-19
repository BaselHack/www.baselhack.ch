<?php

namespace App\Http\Controllers\App;

use App\Enums\CompanyTypeEnum;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Views\Models\ContentDTO;

class PartnersController extends Controller
{
    public function index()
    {
        $content = ContentDTO::fromModel('partners:index');

        $partners = Company::published()
            ->whereIn('type', [CompanyTypeEnum::PARTNER()->value])
            ->orderBy('name')->get();

        return view('app.partners.index')->with([
            'page' => $content->page,
            'title' => $content->title,
            'teaser' => $content->teaser,
            'body' => $content->body,
            'partners' => $partners,
        ]);
    }
}
