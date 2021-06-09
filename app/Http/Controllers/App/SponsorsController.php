<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Page;

class SponsorsController extends Controller
{
    public function index()
    {
        $page = Page::whereIndex('sponsors:index')->first();

        $sponsors = Company::published()->whereType(Company::COMPANY_TYPE_SPONSOR)->orderBy('name','asc')->get();

        return view('app.sponsors.index', compact( 'page','sponsors'));
    }
}
