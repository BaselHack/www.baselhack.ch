<?php

namespace Database\Seeders;

use App\Models\Section;
use App\Models\User;
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
                'key' => 'privacy',
                'title' => 'Privacy',
                'teaser' => 'This data protection declaration is subject to the laws of Switzerland and must be interpreted in accordance with these laws.',
                'body' => file_get_contents(database_path('samples/privacy.md')),
            ]
        );

        Section::create(
            [
                'key' => 'terms',
                'title' => 'Terms',
                'teaser' => 'Please read the following terms and conditions carefully',
                'body' => file_get_contents(database_path('samples/terms.md')),
            ]
        );

        Section::create(
            [
                'key' => 'partners',
                'title' => 'Partners',
                'teaser' => 'We proudly present our partners!',
                'body' => file_get_contents(database_path('samples/partners.md')),
            ]
        );

        Section::create(
            [
                'key' => 'sponsors',
                'title' => 'Sponsors',
                'teaser' => 'We proudly present our sponsors!',
                'body' => file_get_contents(database_path('samples/sponsors.md')),
            ]
        );

        Section::create(
            [
                'key' => 'team',
                'title' => 'Team',
                'teaser' => 'We proudly present our team!',
                'body' => null,
            ]
        );

        Section::create(
            [
                'key' => 'contact',
                'title' => 'Contact',
                'teaser' => null,
                'body' => file_get_contents(database_path('samples/contact.md')),
            ]
        );

        Section::create(
            [
                'key' => 'positions',
                'title' => 'Positions',
                'teaser' => null,
                'body' => null,
            ]
        );

        Section::create(
            [
                'key' => 'posts',
                'title' => 'Blog',
                'teaser' => null,
                'body' => null,
            ]
        );
    }
}
