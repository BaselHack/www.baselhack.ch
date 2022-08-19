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
        $markdown = <<<MARKDOWN

<b>Challenges for baselhack participants</b>

As in the name 'challenge', you will be challenged at baselhack, and have a weekend full of creativity, new perspectives, and also solutions to problems.
Most challenges will be introduced online before baselhack starts, but you will see and hear a 3 minute pitch for every at the start of the hackathon.
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

<i>Stay tuned for upcoming channels on our channels.</i>

MARKDOWN;


        $page = Page::whereIndex('challenges:index')->first();
        //$section = Section::where('key', 'contact')->first();
        return view('app.contact.index')->with([
            'page' => $page,
            'title' => 'Challenges',
            'teaser' => 'At the start of Baselhack, every participant chooses a challenge to work on in a team. There will be sponsored challenges (to be announced soon), and freestyle challenges.',
            'body' => Str::of($markdown)->markdown(),
        ]);
    }
}
