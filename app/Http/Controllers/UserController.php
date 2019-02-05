<?php
use Illuminate\Support\Facades\Input;
use App\Recipe;
use Illuminate\Http\Request;
use App\User;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userProfile()
    {
        $id = Auth::user()->id;
        $myrecipes = \App\Recipe::where('user_id', $id)->get();
    //    dd($myrecipes);



        return view('backend.user_page',['myrecipes' => $myrecipes]);
    }
    public function favorite($id)
    {

        $uid = Auth::user()->id;
        $user = \App\User::where('id', $uid)->first();
        $recipe = \App\Recipe::where('id', $id)->first();
        $user->favorites()->attach($recipe->id, ['favorited' => '1']);

    }
//    public function favoriteshow()
//    $recipe = \App\Recipe::where('')
}
