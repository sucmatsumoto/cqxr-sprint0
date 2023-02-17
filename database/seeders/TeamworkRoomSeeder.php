<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TeamworkRoom;

class TeamworkRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        TeamworkRoom::insert([
          'teamwork_room_id' => '1',
          'room_name' => 'TeamworkRoom001',
          'capacity' => '20',
          'duns_number' => '1' ,
          'object_id' => '0001' ,
          'created_at' => now() ,
          'updated_at' => now() ,
        ]);
    }
}
