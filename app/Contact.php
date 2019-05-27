<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //

    protected $fillable = [
        'name', 'address', 'phonenumber','email','request_id',
    ];
}
