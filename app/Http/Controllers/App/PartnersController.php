<?php

namespace App\Http\Controllers\App;

use App\Models\Company;
use App\Models\Page;
use App\Http\Controllers\Controller;

class PartnersController extends Controller
{
    public function index()
    {
        $page = Page::whereIndex('partners:index')->first();
        $partners = Company::published()->whereType(Company::COMPANY_TYPE_PARTNER)->orderBy('name','asc')->get();
        return view('app.partners.index', compact('page','partners'));
    }
}
