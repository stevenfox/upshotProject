<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motorbike extends Model
{
    protected $fillable = array('id', 'Brand', 'Colour', 'Model_Year');

    public function owner() {   //each motorbike can have many owners
        return $this->hasMany('Owner', 'foreign key', 'Motorbike_id');
    }
}
