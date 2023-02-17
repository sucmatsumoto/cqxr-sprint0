<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserManagement extends Model
{
    use HasFactory;
    protected $table = 'user_management';

    protected $fillable = [
        'id',
        'last_name',
        'first_name',
        'last_name_kana',
        'first_name_kana',
        'mail_address_dacc',
        'mail_address_apple',
        'tel_number',
        'belong_organization',
        'position',
        'created_at',
        'updated_at',
    ];


}
