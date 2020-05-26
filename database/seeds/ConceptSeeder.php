<?php

use App\Concept;
use Illuminate\Database\Seeder;

class ConceptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 5; $i++) {
            Concept::create([
                'name' => $faker->name,
                'description' => $faker->text,
                'images' => $faker->imageUrl,
                'geo_localization' => $faker->latitude,
                'user_id_owner' => $faker->randomNumber()
            ]);
        }
    }
}
