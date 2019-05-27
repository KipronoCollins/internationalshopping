<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    //

    protected $fillable = [
        'user_id', 'replying_to', 'admin_id', 'subject', 'message', 'status',
    ];
}
