<?php

namespace Database\Seeders;

use App\Models\Room;
use Faker\Factory;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Room::create([
                'number' => $faker->numberBetween(100, 299),
                'name' => $faker->company,
            ]);
        }
    }
}
