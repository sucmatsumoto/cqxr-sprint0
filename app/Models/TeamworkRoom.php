<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class TeamworkRoom extends Model
{
    //
    use HasFactory;
    protected $table = 'teamwork_rooms';

    protected $fillable = [
        'teamwork_room_id',
        'room_name',
        'capacity',
        'duns_number',
        'object_id',
        'created_at',
        'updated_at',
    ];

}
