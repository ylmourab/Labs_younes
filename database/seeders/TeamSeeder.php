<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                'photo' => 'photo',
                'nom' => 'Christinne Williams',
                'role' => 'Junior Developer',
                
            ],
            [
                'photo' => 'photo',
                'nom' => 'Christinne Williams',
                'role' => 'Junior Developer',
                
            ],
            [
                'photo' => 'photo',
                'nom' => 'Christinne Williams',
                'role' => 'Junior Developer',
                
            ],
           
        ]);
    }
}
