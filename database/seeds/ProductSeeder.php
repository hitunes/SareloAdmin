<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 10; $i++) {
            App\Models\Product::create([
                'name' => $faker->name,
                'price' => $faker->randomFloat,
                'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
                'category_id' => $faker->randomDigitNotNull,
                'unit' => $faker->randomDigitNotNull,
                'unit_type_id' => $faker->randomDigitNotNull
            ]);
        }
    }
}
