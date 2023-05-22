<?php

namespace Database\Seeders;

use App\Models\People;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    
    public function run()
    {
        
        People::factory()
        ->count(100)
        ->create();

        People::factory()
        ->count(100)
        ->create();

    }
}
