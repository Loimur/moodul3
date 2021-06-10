<?php

namespace Database\Factories;

use App\Models\Burger;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BurgerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Burger::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            Burger::create([
                'name' => $this->faker->name,
                'price' => $this->faker->numberBetween(1, 25),
                'image_path' => '/../img/burger.jpg',
                'description' => $this->faker->text(25),
                'ingredients' => $this->faker->text(50),
                'is_gf' => $this->faker->boolean,
                'is_vegetarian' => $this->faker->boolean,
                'is_vegan' => $this->faker->boolean,
                'hotness' => $this->faker->numberBetween(1, 5)
            ])
        ];
    }
}
