<?php

namespace Database\Factories;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\App;
// use Faker\Generator as Faker;

class ShopFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shop::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'producttype'=>'cd',
            'title'=>'James Bond',
            'firstname'=>$this->faker->name,
            'surname'=>'James Bond',
            'price'=>'100',
            'pages'=>'100',
        ];

    }
}
