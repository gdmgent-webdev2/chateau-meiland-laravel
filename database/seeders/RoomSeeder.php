<?php

namespace Database\Seeders;

use App\Models\Room;
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
        $rooms = ['101', '102', '201', '202'];

        foreach ($rooms as $room) {
            Room::create([
                'name' => $room
            ]);
        }
    }
}
