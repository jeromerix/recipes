<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function users()
    {
        return $this->Belongsto('App\User');
    }
    public function recipes()
    {
        return $this->Belongsto('App\Recipe');
    }
}
