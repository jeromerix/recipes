<?php

namespace App\Http\Controllers;
use App\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;


class TestController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $recipes = \App\Recipe::paginate(3);

        $categories = \App\Category::All();

        return view('test.testindex',['recipes' => $recipes],['categories' => $categories]);
    }
    public function search()
    {
        $categories = \App\Category::All();
        $search = Input::get('search');
        $recipes = Recipe::with('ingredients')->where('name', 'LIKE', "%{$search}%")->get();
        if (count($recipes) >0)
        return view('test.testindexsearch', ['recipes' => $recipes],['categories' => $categories]);
        else return redirect()->back()->with('message', 'No recipe found. Please try different search criteria');
    }
    public function destroy($id)
    {

        $recipe = Recipe::FindorFail($id);
    //    dd($recipe);
        $recipe->ingredients()->detach();
        $recipe->delete();
        return redirect()->back()->with('You succesfully deleted the recipe');
    }
}
