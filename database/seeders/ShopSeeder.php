<?php

namespace Database\Seeders;

use App\Models\Shop;
use Database\Factories\ShopFactory;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shop::truncate();
        Shop::factory()->count(3)->create();
    }
}
