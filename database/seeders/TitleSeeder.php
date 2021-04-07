<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titles')->insert([
            [
                'title1' => 'GET IN THE LAB AND DISCOVER THE WORLD',
                'title2' => 'WHAT OUR CLIENTS SAY',
                'title3' => 'GET IN THE LAB AND SEE THE SERVICES',
                'title4' => 'GET IN THE LAB AND MEET THE TEAM',
                'title5' => 'CONTACT US',
            ],
            
        ]);
    }
}
