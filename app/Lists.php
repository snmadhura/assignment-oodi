<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lists extends Model
{
    protected $table = 'lists';

    protected $fillable = [
    	'user_id',
    	'contactname',
    	'contactphone',
    	'custom_var'
    ];

    protected $hidden = [

    ];
}
