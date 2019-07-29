<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
   protected $fillable = array('id', 'Name', 'Motorbike_id', 'Location');

}
