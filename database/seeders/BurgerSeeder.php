<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BurgerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('burgers')->insert([
            'name' => "Vegeburx",
            'price' => 10,
            'image_path' => '/../img/burger.jpg',
            'description' => 'Väga maitsev',
            'ingredients' => 'Kotlett ja sai',
            'is_gf' => false,
            'is_vegetarian' => true,
            'is_vegan' => true,
            'hotness' => 3,
        ]);
    }
}
