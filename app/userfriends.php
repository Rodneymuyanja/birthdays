<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userfriends extends Model
{
    //
    protected $fillable = [
        'user','friends',
    ];
}
