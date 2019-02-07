<?php

namespace App;

use App\User;
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
        return $this->belongsToMany('App\User');
    }

    public function getLikes()
    {
        return $this->like()->count();
    }

    public function hasLiked($userId)
    {

        $tmp = $this->like->contains($userId);
        // dd($tmp);
        // $commentId = $this->id;
        // $user = User::findOrFail($userId)
        //     ->whereHas('comments', function ($query) use ($commentId) {
        //         $query->where('id', $commentId);
        //     })->get();

        // dd($user);

        return $tmp;
    }
}
