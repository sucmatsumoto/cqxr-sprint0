<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CollaborationRoom extends Model
{
    //
    use HasFactory;
    protected $table = 'collaboration_rooms';

    protected $fillable = [
        'collaboration_room_id',
        'room_name',
        'capacity',
        'duns_number',
        'object_id',
        'created_at',
        'updated_at',
    ];
}
