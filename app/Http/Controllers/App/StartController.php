<?php

namespace App\Http\Controllers\App;

use App\Enums\CompanyTypeEnum;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Page;
use App\Models\Post;

class StartController extends Controller
{
    public function index()
    {
        $page = Page::whereIndex('start:index')->first();

        $mainSponsors = Company::published()
            ->whereIn('type', [CompanyTypeEnum::SPONSOR_MAIN()->value])
            ->orderBy('name')->get();

        $sponsors = Company::published()
            ->whereIn('type', [CompanyTypeEnum::SPONSOR()->value])
            ->orderBy('name')->get();

        $post = Post::whereNotNull('published_at')->orderBy('published_at', 'desc')->first();

        return view('app.start.index')->with([
            'page' => $page,
            'post' => $post,
            'mainSponsors' => $mainSponsors,
            'sponsors' => $sponsors,
        ]);
    }
}
