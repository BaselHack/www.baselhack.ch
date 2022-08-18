<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AddAboutPage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Insert some stuff
        DB::table('sections')->insert(
            array(
                'key' => 'about',
                'title' => 'About',
                'teaser' => 'About the BaselHack'
            )
        );

        DB::table('pages')->insert(
            array(
                'uuid' => Str::uuid(),
                'index' => 'about:index',
                'title' => 'About the BaselHack'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
