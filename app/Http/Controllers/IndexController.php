<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $recipes = \App\Recipe::All();

        $categories = \App\Category::All();

        return view('pages.index',['recipes' => $recipes],['categories' => $categories]);
    }
    public function search()
    {
        $searchrecipe = DB::table('recipes')->where('name', 'LIKE', "%{%search}%");
    }
}
