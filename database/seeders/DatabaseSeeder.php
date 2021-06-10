<?php

namespace Database\Seeders;

use App\Models\Burger;
use App\Models\User;
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
        $this->call(UserSeeder::class);
        Burger::factory()->count(10)->create();
    }
}
