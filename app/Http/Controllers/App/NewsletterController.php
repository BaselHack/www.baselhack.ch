<?php

namespace App\Http\Controllers\App;

use App\Jobs\StoreNewsletterRequestJob;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsletterRequest;

class NewsletterController extends Controller
{
    public function store(StoreNewsletterRequest $request)
    {
        StoreNewsletterRequestJob::dispatch($request->all());

        flash(__('app/newsletter.notification.success.description'));

        return back();
    }
}
