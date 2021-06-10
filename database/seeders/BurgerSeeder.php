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
        $burgers = [
            ['name' => "Klassik",
                'price' => 7,
                'image_path' => '/../img/klassik.jpg',
                'description' => 'Klassikaline Nehatu burger.',
                'ingredients' => 'Kukkel, pestomajonees, rukola, tomat, värske punane sibul, 130 grammine veiselihapihv, juust.',
                'is_gf' => false,
                'is_vegetarian' => false,
                'is_vegan' => false,
                'hotness' => 1,],
            ['name' => "Juustuburger",
                'price' => 7,
                'image_path' => '/../img/juust.jpg',
                'description' => 'Eriti juustune.',
                'ingredients' => 'Kukkel, mädarõika-sinepimajonees, jääsalat, värske punane sibul, 130 grammine veiselihapihv, topeltjuust.',
                'is_gf' => false,
                'is_vegetarian' => false,
                'is_vegan' => false,
                'hotness' => 3,],
            ['name' => "Major",
                'price' => 8,
                'image_path' => '/../img/mayor.jpg',
                'description' => 'Uhke värk.',
                'ingredients' => 'Kukkel, 2x130grammine veiselihapihv, juust, ketšup, sinep, marineeritud kurk.',
                'is_gf' => false,
                'is_vegetarian' => false,
                'is_vegan' => false,
                'hotness' => 2,],
            ['name' => "Vegeburger",
                'price' => 6,
                'image_path' => '/../img/vege.jpg',
                'description' => 'Halloumi juustuga.',
                'ingredients' => 'Kukkel, pestomajonees, rukola, tomat, halloumi juust, sibulamoos.',
                'is_gf' => false,
                'is_vegetarian' => true,
                'is_vegan' => false,
                'hotness' => 3,],
            ['name' => "Beyond Meat",
                'price' => 10,
                'image_path' => '/../img/beyond.jpg',
                'description' => 'Parem kui liha.',
                'ingredients' => 'Kukkel, vegan majonees, vegan juust, rukola, tomat, Beyond meat pihv, marineeritud kurk.',
                'is_gf' => false,
                'is_vegetarian' => true,
                'is_vegan' => true,
                'hotness' => 3,],
            ['name' => "Eriti Tige",
                'price' => 9,
                'image_path' => '/../img/tige.jpg',
                'description' => 'Vapratele.',
                'ingredients' => 'Kukkel, tšillimajonees, rukola, tomat, Beyond meat pihv, vegan, juust, vürtsikas punane sibul chilliga.',
                'is_gf' => false,
                'is_vegetarian' => true,
                'is_vegan' => true,
                'hotness' => 5,],
            ['name' => "Gluteenivaba Major",
                'price' => 8,
                'image_path' => '/../img/mayor.jpg',
                'description' => 'Uhke värk.',
                'ingredients' => 'Gluteenivaba kukkel, 2x130grammine veiselihapihv, juust, ketšup, sinep, marineeritud kurk.',
                'is_gf' => true,
                'is_vegetarian' => false,
                'is_vegan' => false,
                'hotness' => 2,],
            ['name' => "Gluteenivaba Vegeburger",
                'price' => 6,
                'image_path' => '/../img/vege.jpg',
                'description' => 'Halloumi juustuga.',
                'ingredients' => 'Gluteenivaba kukkel, pestomajonees, rukola, tomat, halloumi juust, sibulamoos.',
                'is_gf' => true,
                'is_vegetarian' => true,
                'is_vegan' => false,
                'hotness' => 3,],
            ['name' => "Gluteenivaba Beyond Meat",
                'price' => 10,
                'image_path' => '/../img/beyond.jpg',
                'description' => 'Parem kui liha.',
                'ingredients' => 'Gluteenivaba kukkel, vegan majonees, vegan juust, rukola, tomat, Beyond meat pihv, marineeritud kurk.',
                'is_gf' => true,
                'is_vegetarian' => true,
                'is_vegan' => true,
                'hotness' => 3,],
            ['name' => "Eriti Tige Gluteenivaba Burger",
                'price' => 9,
                'image_path' => '/../img/tige.jpg',
                'description' => 'Vapratele.',
                'ingredients' => 'Gluteenivaba kukkel, tšillimajonees, vegan juust, rukola, tomat, Beyond meat pihv, vürtsikas punane sibul chilliga.',
                'is_gf' => true,
                'is_vegetarian' => true,
                'is_vegan' => true,
                'hotness' => 5,],
        ];

        DB::table('burgers')->insert($burgers);
    }
}
