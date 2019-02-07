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
        return $this->belongsTo('App\User');
    }

    public function recipes()
    {
        return $this->belongsTo('App\Recipe');
    }
    public function like()
    {
        return $this->belongsToMany('App\User')->withPivot('like');
    }
}
