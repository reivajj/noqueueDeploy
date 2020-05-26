<?php

use App\Turn;
use Illuminate\Database\Seeder;

class TurnSeeder extends Seeder
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
            Turn::create([
                'queue_id' => $faker->randomNumber(),
                'user_id' => $faker->randomNumber(),
                'email' => $faker->email,
            ]);
        }
    }
}
