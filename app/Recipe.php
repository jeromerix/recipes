<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function users()
    {
        return $this->belongsto('App\User');
    }

    public function ingredients()
    {
        return $this->hasMany('App\Ingredient');
    }

    public function kitchenwares()
    {
        return $this->hasMany('App\Kitchenware');
    }
}
