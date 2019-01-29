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

    public function lindex()
    {
        $recipes = Recipe::whereHas('ingredients',function ($query) {
             $search = Input::get('ingredient');
            $query->where('ingredient_id', 'LIKE', $search);
        })->get();
        // \App\Recipe::with('ingredients')->where('ingredient_id', 'LIKE', "%{$search}%")->get()
        // ->paginate(3);
        $categories = \App\Category::All();

        return view('pages.index',['recipes' => $recipes],['categories' => $categories]);
    }

    public function search()
    {
        $searchrecipe = DB::table('recipes')->where('name', 'LIKE', "%{%search}%");
    }
}
