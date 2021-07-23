<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class friends extends Model
{
    //
    protected $fillable = [
        'name', 'comments', 'birthday','email', 'message', 'pets','gifts','cake','music','movies','places'
    ];
}
