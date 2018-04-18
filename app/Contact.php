<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contactform';
    protected $fillable = [
    	'name',
    	'email',
    	'mobile',
    	'message'
    ];
    public $timestamps = false;
}
