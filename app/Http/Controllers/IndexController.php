<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Recipe;
use Illuminate\Http\Request;

class IndexController extends Controller
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

        return view('pages.index',['recipes' => $recipes],['categories' => $categories]);
    }
    public function search()
    {
        $categories = \App\Category::All();
        $search = Input::get('search');
        $recipes = Recipe::with('ingredients')->where('name', 'LIKE', "%{$search}%")->get();
        if (count($recipes) >0)
        return view('pages.recipe', ['recipes' => $recipes],['categories' => $categories]);
        else return redirect()->back()->with('message', 'No recipe found. Please try different search criteria');
    }
}
