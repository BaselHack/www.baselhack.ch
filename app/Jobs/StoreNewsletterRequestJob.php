<?php

namespace App\Jobs;

use Illuminate\Support\Facades\Log;
use Newsletter as Mailchimp;

use App\Models\Newsletter;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class StoreNewsletterRequestJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $newsletter = Newsletter::updateOrCreate([
            'email' => $this->request['email'],
        ]);

        try {
            if (!Mailchimp::isSubscribed($newsletter->email)) {
                $response = Mailchimp::subscribe($newsletter->email);
                ray($response);
            }
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
        }
    }
}
