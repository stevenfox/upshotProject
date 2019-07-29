<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magazine extends Model
{
        protected $fillable = array('id','Name', 'Price', 'Cover', 'Colour', 'Size', 'Theme');
}
