<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sms extends Model
{
    use HasFactory;
    protected $fillable = [
        'textMessage',
        'msisdn',
        'member_id',
        'user_id',
        'message_id',
        'error'

    ];

}
