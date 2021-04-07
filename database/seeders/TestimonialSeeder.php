<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            [
                'quote' => 'lorem ipsum',
                'name' => 'Michael Smith',
                'role' => 'CEO company',
                'img' => 'IMAGE',
            ],
            [
                'quote' => 'lorem ipsum',
                'name' => 'Michael Smith',
                'role' => 'CEO company',
                'img' => 'IMAGE',
            ],
          
        ]);
    }
}
