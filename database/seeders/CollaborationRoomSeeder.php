<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CollaborationRoom;

class CollaborationRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        CollaborationRoom::insert([
          'collaboration_room_id' => '1',
          'room_name' => 'CollaborationRoom001',
          'capacity' => '40',
          'duns_number' => '1' ,
          'object_id' => '0001' ,
          'created_at' => now() ,
          'updated_at' => now() ,

        ]);
    }
}
