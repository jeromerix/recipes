<?php
use App\Recipe;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Image;
use Auth as CustomAuth;

class UserController extends Controller
{
    public function userProfile()
    {
        $id = Auth::user()->id;
        $myrecipes = \App\Recipe::where('user_id', $id)->get();
    //    dd($myrecipes);



        return view('backend.user_page',['myrecipes' => $myrecipes], array('user'=>Auth::user()) );
    }
    public function updateProfilepic(Request $request)
    {
        $id = Auth::user()->id;
        $myrecipes = \App\Recipe::where('user_id', $id)->get();
        $request->validate([
        'pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

      if($request->hasFile('pic'))
      {
        $pic = $request->file('pic');
        $filename = time().'.'.$pic->getClientOriginalExtension();
        Image::make($pic)->resize(200, 200)->save(public_path('/profile_images/'.$filename));

        $user= Auth::user();
        $user->avatar = $filename;
        $user->save();

      }
      return view('backend.user_page',['myrecipes' => $myrecipes], array('user'=>Auth::user()) );
    }
}
