<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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

        return view('pages.index', ['recipes' => $recipes], ['categories' => $categories]);
    }

    public function filter(Request $request)
    {
        $search = $request->input('ingredients');

        // if Search is empty
        if (!isset($search)) {
            return redirect()->back()->with('message', 'No recipes found (Selected ingredients apeared to be empty.)');
        }

        $recipes = Recipe::whereHas('ingredients', function ($query) use ($search) {
            $query->whereIn('ingredients.id', $search);
        })->paginate(3);

        //If no recipe found with
        if ($recipes->count() > 0) {
            $categories = \App\Category::All();
            return view('pages.filter', ['recipes' => $recipes, 'categories' => $categories, 'ingredients' => $search]);
        } else {
            return redirect()->back()->with('message', 'There are no recipes with your chosen ingredients');
        }
    }

    public function search()
    {
        $categories = \App\Category::All();
        $search = Input::get('search');
        $recipes = Recipe::with('ingredients')->where('name', 'LIKE', "%{$search}%")->get();
        if (count($recipes) > 0) {
            return view('pages.search', ['recipes' => $recipes], ['categories' => $categories]);
        } else {
            return redirect()->back()->with('message', 'No recipe found. Please try different search criteria');
        }

    }
}
