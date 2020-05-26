<?php

use Illuminate\Database\Seeder;
use App\Queue;

class QueueSeeder extends Seeder
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
            Queue::create([
                'max_len' => $faker->randomNumber(),
                'average_time' => $faker->randomNumber(),
                'concept_id' => $i
            ]);
        }
    }
}
