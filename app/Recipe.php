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
        return $this->belongsToMany('App\Ingredient')->withPivot('amount','unit');
    }

    public function kitchenwares()
    {
        return $this->belongsToMany('App\Kitchenware');
    }
}
