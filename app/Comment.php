<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = [
        'comment',
        'user_id',
        'rating',
        'recipe_id',
    ];

    public function user()
    {
        return $this->Belongsto('App\User');
    }

    public function recipes()
    {
        return $this->Belongsto('App\Recipe');
    }
}
