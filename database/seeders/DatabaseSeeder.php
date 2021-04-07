<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(NavSeeder::class);
        $this->call(CarrouselSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(DiscoverSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(TitleSeeder::class);
        
    }
}
