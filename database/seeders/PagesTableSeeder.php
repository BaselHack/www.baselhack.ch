<?php

namespace Database\Seeders;

use App\Models\Channel;
use App\Models\Page;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'index' => 'start:index',
            'robots' => 'index,follow',
            'title' => 'BaselHack | We\'re More than a Hack',
            'description' => 'We connect people, take fun seriously and grow open innovation',
        ]);
        Page::create([
            'index' => 'about:index',
            'title' => 'About the BaselHack'
        ]);
        Page::create([
            'index' => 'posts:index',
            'robots' => 'index,follow',
            'title' => 'BaselHack | Blog',
            'description' => null,
        ]);
        Page::create([
            'index' => 'team:index',
            'robots' => 'index,follow',
            'title' => 'BaselHack | Team',
            'description' => null,
        ]);
        Page::create([
            'index' => 'sponsors:index',
            'robots' => 'index,follow',
            'title' => 'BaselHack | Sponsors',
            'description' => 'Much more than a Hackathon  - Meet people who can help you and your organisations to thrive',
        ]);
        Page::create([
            'index' => 'partners:index',
            'robots' => 'index,follow',
            'title' => 'BaselHack | Partners',
            'description' => 'Collaboration is key - From the region of Basel for the region of Basel',
        ]);
        Page::create([
            'index' => 'positions:index',
            'robots' => 'index,follow',
            'title' => 'BaselHack | Positions',
            'description' => 'We proudly present open positions from our partners!',
        ]);
        Page::create([
            'index' => 'contact:index',
            'robots' => 'index,follow',
            'title' => 'BaselHack | Contact',
            'description' => 'Contact the Baselhack Team',
        ]);
        Page::create([
            'index' => 'privacy:index',
            'robots' => 'noindex,nofollow',
            'title' => 'BaselHack | Privacy',
            'description' => null,
        ]);
        Page::create([
            'index' => 'terms:index',
            'robots' => 'noindex,nofollow',
            'title' => 'BaselHack | Terms',
            'description' => null,
        ]);
    }
}
