<?php
use App\Recipe;
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
}
