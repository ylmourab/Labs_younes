<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'icone' => 'home',
                'titre' => 'GET IN THE LAB
                ',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',

            ],
            [
                'icone' => 'home',
                'titre' => 'PROJECTS ONLINE',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',

            ],

            [
                'icone' => 'home',
                'titre' => 'home',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',

            ],
            [
                'icone' => 'home',
                'titre' => 'home',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',

            ],
            [
                'icone' => 'home',
                'titre' => 'home',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',

            ],
            [
                'icone' => 'home',
                'titre' => 'home',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',

            ],
            [
                'icone' => 'home',
                'titre' => 'home',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',

            ],
            [
                'icone' => 'home',
                'titre' => 'home',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',

            ],
            [
                'icone' => 'home',
                'titre' => 'home',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',

            ],
            
        ]);
    }
}
