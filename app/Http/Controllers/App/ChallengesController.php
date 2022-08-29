<?php

namespace App\Http\Controllers\App;

use App\Models\Page;
use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Support\Str;

class ChallengesController extends Controller
{
    public function index()
    {
        /**
        $markdown = <<<MARKDOWN

<b>Challenges for BaselHack participants</b>

As in the name 'challenge', you will be challenged at BaselHack, and have a weekend full of creativity, new perspectives, and also solutions to problems.
Most challenges will be introduced online before BaselHack starts, but you will see and hear a 3 minute pitch for each at the start of the hackathon.
That is the final call for choosing your challenge.
Then, with your team, after two days of prototyping, coding, business engineering and technical engineering, you submit your results on github and present it to a Jury.
You can win prize money, as well as two topical awards (to be announced soon).



<b>Sponsored Challenges</b>

Every sponsored challenge has CHF 1'000 of prize money for team providing the best solution.
Our sponsored challenges will be listed below.

<span style="color: yellow">
<ul>
<li>Bell: to be announced soon</li>
<li>Coop: to be announced soon</li>
<li>IWF Web solutions: to be announced soon</li>
</ul>
</span>

<b>Freestyle Challenges</b>

Anybody can submit a freestyle challenge, even until team building phase at the baselhack. The best team across all freestyle challenges will also win a prize of CHF 1'000.
<br>
-><a href="https://github.com/BaselHack/BaselHack-2022/issues/new/choose">Freestyle Challenges on github</a>

<i>Stay tuned for upcoming challenges on our channels.</i>

MARKDOWN;
         **/

        $page = Page::whereIndex('challenges:index')->first();
        $section = Section::where('key', 'challenges')->first();

        return view('app.challenges.index')->with([
            'page' => $page,
            'title' => $section->title,
            'teaser' => $section->teaser,
            'body' => Str::of($section->body)->markdown(),
        ]);
    }
}
