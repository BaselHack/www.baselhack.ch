<?php

namespace App\Http\Controllers\App;

use App\Models\Company;
use App\Models\Page;
use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Support\Str;

class PartnersController extends Controller
{
    public function index()
    {
        $page = Page::whereIndex('partners:index')->first();

        $section = Section::where('key', 'partners')->firstOrFail();

        $partners = Company::published()
            ->whereType(Company::COMPANY_TYPE_PARTNER)
            ->orderBy('name', 'asc')->get();

        return view('app.section.index')->with([
            'page' => $page,
            'title' => $section->title,
            'teaser' => $section->teaser,
            'body' => Str::of($section->body)->markdown(),
            'partners' => $partners,
        ]);
    }
}
