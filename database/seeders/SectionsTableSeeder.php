<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Section::create(
            [
                'index' => 'privacy:index',
                'title' => 'Privacy',
                'teaser' => 'This data protection declaration is subject to the laws of Switzerland and must be interpreted in accordance with these laws.',
                'body' => file_get_contents(database_path('samples/privacy.md')),
            ]
        );

        Section::create(
            [
                'index' => 'terms:index',
                'title' => 'Terms',
                'teaser' => 'Please read the following terms and conditions carefully.',
                'body' => file_get_contents(database_path('samples/terms.md')),
            ]
        );

        Section::create(
            [
                'index' => 'partners:index',
                'title' => 'Partners',
                'teaser' => 'Partners of the BaselHack',
                'body' => file_get_contents(database_path('samples/partners.md')),
            ]
        );

        Section::create(
            [
                'index' => 'sponsors:index',
                'title' => 'Sponsors',
                'teaser' => 'Sponsors of the BaselHack',
                'body' => file_get_contents(database_path('samples/sponsors.md')),
            ]
        );

        Section::create(
            [
                'index' => 'team:index',
                'title' => 'Team',
                'teaser' => 'The team behind the BaselHack',
                'body' => null,
            ]
        );

        Section::create(
            [
                'index' => 'contact:index',
                'title' => 'Contact',
                'teaser' => 'Leave us a message!',
                'body' => file_get_contents(database_path('samples/contact.md')),
            ]
        );

        Section::create(
            [
                'index' => 'positions:index',
                'title' => 'Positions',
                'teaser' => 'Current job openings with BaselHack sponsoring companies.',
                'body' => null,
            ]
        );

        Section::create(
            [
                'index' => 'posts:index',
                'title' => 'Blog',
                'teaser' => 'News and information about the BaselHack event',
                'body' => null,
            ]
        );

        Section::create(
            [
                'index' => 'about:index',
                'title' => 'About',
                'teaser' => 'The hackathon for the Basel region.',
                'body' => file_get_contents(database_path('samples/about.md')),
            ]);

        Section::create(
            [
                'index' => 'challenges:index',
                'title' => 'Challenges',
                'teaser' => 'The BaselHack is all about challenges! At the start of the hackathon, each participant joins a team to work on a freestyle or sponsored challenge.',
                'body' => file_get_contents(database_path('samples/challenges.md')),
            ]
        );

        Section::create(
            [
                'index' => 'schedule:index',
                'title' => 'Schedule 2022',
                'teaser' => 'The schedule for the BaselHack 2022',
                'body' => file_get_contents(database_path('samples/schedule.md')),
            ]
        );
    }
}
