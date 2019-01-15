<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function categories()
    {
        return $this->belongsto('App\Category');
    }
}
