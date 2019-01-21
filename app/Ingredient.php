<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function categories()
    {
        return $this->belongsto('App\Category');
    }
    public function recipes()
    {
        return $this->belongsToMany('App\Recipe')->withPivot('amount','unit');
    }
}
