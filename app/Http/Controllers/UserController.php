<?php
use App\Recipe;
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
        $user = \App\User::where('id', $uid)->get();
        $recipe = \App\Recipe::where('id', $id)->get();
        $user->favorites()->attach($recipe->id, ['favorited' => '1']);

    }
}
