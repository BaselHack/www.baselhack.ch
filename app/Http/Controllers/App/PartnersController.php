<?php

namespace App\Http\Controllers\App;

use App\Enums\CompanyTypeEnum;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Page;
use App\Models\Section;
use Illuminate\Support\Str;

class PartnersController extends Controller
{
    public function index()
    {
        $page = Page::whereIndex('partners:index')->first();

        $section = Section::where('key', 'partners')->first();

        $partners = Company::published()
            ->whereIn('type', [CompanyTypeEnum::PARTNER()->value])
            ->orderBy('name')->get();

        return view('app.partners.index')->with([
            'page' => $page,
            'title' => $section?->title ?? '',
            'teaser' => $section?->teaser ?? '',
            'body' => Str::of($section?->body ?? '')->markdown(),
            'partners' => $partners,
        ]);
    }
}
