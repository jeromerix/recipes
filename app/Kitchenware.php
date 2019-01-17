<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kitchenware extends Model
{
    public function recipes()
    {
        return $this->belongsToMany('App\Recipe');
    }
}
