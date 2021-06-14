<?php

namespace App\Http\Controllers\App;

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

        $section = Section::where('key', 'sponsors')->firstOrFail();

        $sponsors = Company::published()
            ->whereType(Company::COMPANY_TYPE_SPONSOR)
            ->orderBy('name', 'asc')->get();

        return view('app.sponsors.index')->with([
            'page' => $page,
            'title' => $section->title,
            'teaser' => $section->teaser,
            'body' => Str::of($section->body)->markdown(),
            'sponsors' => $sponsors,
        ]);

    }
}
