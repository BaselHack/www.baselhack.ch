<?php

namespace Database\Seeders;

use App\Models\Channel;
use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([
            'published' => true,
            'name' => 'Github',
            'icon' => 'fab fa-github',
            'url' => 'https://github.com/BaselHack',
        ]);

        Channel::create([
            'published' => true,
            'name' => 'Youtube',
            'icon' => 'fab fa-youtube',
            'url' => 'https://www.youtube.com/channel/UCat5BvUrfV7am60pLpuy8oQ',
        ]);

        Channel::create([
            'published' => true,
            'name' => 'Twitter',
            'icon' => 'fab fa-twitter',
            'url' => 'https://twitter.com/BaselHack',
        ]);

        Channel::create([
            'published' => true,
            'name' => 'LinkedIn',
            'icon' => 'fab fa-linkedin-in',
            'url' => 'https://www.linkedin.com/groups/8615464',
        ]);

        Channel::create([
            'published' => true,
            'name' => 'Facebook',
            'icon' => 'fab fa-facebook-f',
            'url' => 'https://www.facebook.com/BaselHackathon',
        ]);

        Channel::create([
            'published' => true,
            'name' => 'Instagram',
            'icon' => 'fab fa-instagram',
            'url' => 'https://www.instagram.com/explore/tags/baselhack/',
        ]);

        Channel::create([
            'published' => true,
            'name' => 'Slack',
            'icon' => 'fab fa-slack-hash',
            'url' => 'https://baselhack.slack.com',
        ]);
    }
}
