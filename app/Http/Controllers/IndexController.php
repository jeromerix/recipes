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

    public function filter()
    {
        $recipes = Recipe::whereHas('ingredients',function ($query) {
             $search = Input::get('ingredient');

            // can search 20 ingredients
            $query->where('ingredient_id','=', [$search])
            ->orWhere('ingredient_id', '=', [$search])
            ->orWhere('ingredient_id', '=', [$search])
            ->orWhere('ingredient_id', '=', [$search])
            ->orWhere('ingredient_id', '=', [$search])
            ->orWhere('ingredient_id', '=', [$search])
            ->orWhere('ingredient_id', '=', [$search])
            ->orWhere('ingredient_id', '=', [$search])
            ->orWhere('ingredient_id', '=', [$search])
            ->orWhere('ingredient_id', '=', [$search])
            ->orWhere('ingredient_id', '=', [$search])
            ->orWhere('ingredient_id', '=', [$search])
            ->orWhere('ingredient_id', '=', [$search])
            ->orWhere('ingredient_id', '=', [$search])
            ->orWhere('ingredient_id', '=', [$search])
            ->orWhere('ingredient_id', '=', [$search])
            ->orWhere('ingredient_id', '=', [$search])
            ->orWhere('ingredient_id', '=', [$search])
            ->orWhere('ingredient_id', '=', [$search])
            ->orWhere('ingredient_id', '=', [$search])
            ->orWhere('ingredient_id', '=', [$search]);

        })->paginate(2);
        $categories = \App\Category::All();
        $sla = Input::get('ingredient');

        return view('pages.filter',['recipes' => $recipes],['categories' => $categories])->with('sla',$sla);
    }

    public function search()
    {
        $searchrecipe = DB::table('recipes')->where('name', 'LIKE', "%{%search}%");
    }
}
