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
        $recipes = DB::table('recipes')->where('name', 'LIKE', "%{$search}%")->get();
    //    dd($recipes);
        return view('test.testindexsearch', ['recipes' => $recipes],['categories' => $categories]);
    }
}
