<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name', 'city', 'country', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function recipes()
    {
        return $this->hasMany('App\Recipe');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function favorite()
    {
        return $this->belongsToMany('App\Recipe');
    }
}
