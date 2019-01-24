<?php

namespace App\Http\Controllers;

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
        $search = Get::Input('search');
        $searchrecipe = DB::table('recipes')->where('name', 'LIKE', "%{$search}%");
    }
}
