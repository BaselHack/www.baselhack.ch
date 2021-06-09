<?php

namespace App\Http\Controllers\App;

use App\Models\Page;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $page = Page::whereIndex('contact:index')->first();

        return view('app.contact.index', compact('page'));
    }
}
