<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Main;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Main::truncate();
        Main::factory(1000000)->create();
    }
}
